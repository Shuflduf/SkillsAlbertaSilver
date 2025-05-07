<?php
require 'db_connect.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Banff Gift Shop</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="default.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>
	<style type="text/css">
		@import "gallery.css";
	</style>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Banff</a></h1>
				<h2><a>Where every view is a postcard</a></h2>
			</div>
			<div id="menu">
					<div><a href="index.html">Homepage</a></div>
					<div class="active"><a href="giftshop.php">Gift Shop</a></div>
					<div><a href="about.html">About</a></div>
          <div><a href="hiking.php">Hiking</a></div>
					<div><a href="contact.html">Contact</a></div>
			</div>
		</div>
		<div>
			<div id="page">
				<div class="inne_copy"></div>
				<div id="page-bgtop">
					<div id="content">

						<div class="post">
							<div class="post-bgtop">
								<div class="post-bgbtm">
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
                        WHERE PRD_ID=".$row["PRD_ID"]."
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
                        echo '<b>'.$stars.'/5</b> - '.$reviewText; 
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
						</div>
						<div class="post">
							<div class="post-bgtop">
								<div class="post-bgbtm">
									<h2 class="title"><a href="#">Lorem Ipsum Dolor Volutpat</a></h2>
									<p class="byline">Posted by <a href="#">Someone</a> April 22, 2010</p>
									<div class="entry">
										<p>Curabitur tellus. Phasellus tellus turpis, iaculis in, faucibus lobortis, posuere in, lorem. Donec a ante. Donec neque purus, adipiscing id, eleifend a, cursus vel, odio. Vivamus varius justo sit amet leo. Morbi sed libero. Vestibulum blandit augue at mi. Praesent fermentum lectus eget diam. Nam cursus, orci sit amet porttitor iaculis, ipsum massa aliquet nulla, non elementum mi elit a mauris. Praesent fermentum lectus eget diam. Nam cursus, orci sit amet porttitor iaculis, ipsum massa aliquet nulla, non elementum mi elit a mauris. Curabitur tellus. Phasellus tellus turpis, iaculis in, faucibus lobortis, posuere in, lorem. Donec a ante. Donec neque purus, adipiscing cursus vel, odio.</p>
									</div>
									<div class="meta">
										<p><a href="#" class="more">View More</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- sidebar.php -->
					<?php include('sidebar.php'); ?>
					<div style="clear:both; height: 1px"></div>
				</div>
			</div>
		</div>
		<div id="footer-wrapper">
			<div id="footer">
				<div class="fleft">
					<p>Copyright statement.</p>
				</div>
				<div class="fright">
					<p>My Website</p>
				</div>
				<div class="fcenter">
					<p>Design by: My Website</p>
				</div>
				<div class="fclear"></div>
			</div>
		</div>
</body>

</html>
