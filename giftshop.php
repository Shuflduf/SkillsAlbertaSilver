<?php
require 'db_connect.php';
$page = 'giftshop';
require_once 'components/header.php';
?>
<div id="page">
    <div class="inne_copy"></div>
    <div id="page-bgtop">
        <div id="content">
            <div class="post">
                        <h2 class="title"><a href="#">Gift Shop</a></h2>
                        <div class="entry">
                            <?php
                            // Fetch product types
                            $sql = "SELECT PRDTYP_ID, PRDTYP_Name FROM PRDTYP_ProductTypes";
                            $result = $conn->query($sql);

                            // Handle postback
                            $selectedType = "";
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_type'])) {
                                $selectedType = $_POST['product_type'];
                            } else {
                                $selectedType = "ALL";
                            }
                            ?>
                            <form method="post">
                                <select name="product_type" onchange="this.form.submit()">
                                    <option value="">All Items</option>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $selected = ($row["PRDTYP_ID"] == $selectedType) ? "selected" : "";
                                            echo '<option value="' . $row["PRDTYP_ID"] . '" ' . $selected . '>' . htmlspecialchars($row["PRDTYP_Name"]) . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </form>
                            <br /><br />
                            <?php
                            if (is_numeric($selectedType)) {
                                $sql = "SELECT * FROM prd_products WHERE PRDTYP_ID=" . $selectedType;
                            } else {
                                $sql = "SELECT * from prd_products WHERE NOT PRDTYP_ID=0";
                            }
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $sql = "
                                    SELECT EXTRA, STARS
                                    FROM prd_reviews
                                    WHERE PRD_ID=" . $row["PRD_ID"] . "
                                    ORDER BY TIME DESC
                                    LIMIT 1 
                                    ";
                                    $reviewResult = $conn->query($sql);

                                    echo '<div class="product-entry">';
                                    echo '<img src="' . $row["PRD_ImagePath"] . '">';
                                    echo '<div class="product-details">';
                                    echo '<h1>' . $row["PRD_Name"] . '</h1>';
                                    echo '<h2>' . $row["PRD_Description"] . '</h2>';
                                    echo '<div class="latest-review">';
                                    if ($reviewResult->num_rows > 0) {
                                        echo '<p>Latest Review<p>';
                                        $review = $reviewResult->fetch_assoc();
                                        $reviewText = $review["EXTRA"];
                                        $stars = $review["STARS"];
                                        echo '<b>' . $stars . '/5</b> - ' . $reviewText;
                                    } else {
                                        echo '<p>No reviews yet</p>';
                                    }
                                    echo '</div>';
                                    echo '<form action="product.php" method="post">';
                                    echo '<input type="hidden" name="id" value="' . $row["PRD_ID"] . '"></input>';
                                    echo '<button type="submit">$' . $row["PRD_Price"] . '</button>';
                                    echo '</form>';
                                    echo '</div>';
                                    echo '</div><br>';
                                }
                            } else {
                                echo "No products found.";
                            }

                            // Close connection (optional)
                            $conn->close();
                            ?>
                        </div>
            </div>
        </div>
        <?php require_once 'components/sidebar.php'; ?>
        <div style="clear:both; height: 1px"></div>
    </div>
</div>

<?php include('components/footer.php'); ?>
</body>
</html>
