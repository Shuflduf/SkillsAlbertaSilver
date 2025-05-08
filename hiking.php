<?php
$page = 'hiking';
require_once 'components/header.php';
require_once 'db_connect.php';
?>
<div id="page" class="flex">
    <div id="content">
        <div class="post">
            <h2 class="title"><a href="#">Hiking Trails</a></h2>
            <div class="entry">
                <?php
                // Fetch hikes
                $sql = "SELECT HIK_ID, HIK_Name FROM hik_hikes ORDER BY HIK_Name";
                $result = $conn->query($sql);

                // Handle postback
                $selectedHike = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hike_chosen'])) {
                    $selectedHike = $_POST['hike_chosen'];
                }
                ?>
                <form method="post">
                    <select name="hike_chosen" onchange="this.form.submit()">
                        <option value="">Select a Hike</option>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $selected = ($row["HIK_ID"] == $selectedHike) ? "selected" : "";
                                echo '<option value="' . $row["HIK_ID"] . '" ' . $selected . '>' . htmlspecialchars($row["HIK_Name"]) . '</option>';
                            }
                        }
                        ?>
                    </select>
                </form>
                <br /><br />
                <?php
                if (is_numeric($selectedHike)) {
                    $sql = "SELECT * FROM hik_hikes WHERE HIK_ID=" . $selectedHike;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $hikeName = $row["HIK_Name"];
                            $hikeDesc = $row["HIK_Description"];
                            $hikeLength = $row["HIK_LengthKilometers"];
                            $hikeDifficulty = $row["HIK_DifficultyLevel"];
                            $hikeTime = $row["HIK_TimeLengthMinutes"];
                            $hikeElevation = $row["HIK_ElevationGainMeters"];
                            $hikeInjuries = $row["HIK_NumberOfInjuries"];
                            
                            echo '<div class="hike-entry">'; 
                            echo '<h1>' . htmlspecialchars($hikeName) . '</h1><br>';
                            echo '<h2>' . htmlspecialchars($hikeDesc) . '</h2><br>';
                            echo '<p><b>Length</b>: ' . htmlspecialchars($hikeLength) . ' km</p>';
                            echo '<p><b>Difficulty</b>: ' . htmlspecialchars($hikeDifficulty) . '</p>';  
                            echo '<p><b>Time</b>: ' . htmlspecialchars($hikeTime) . ' minutes</p>';
                            echo '<p><b>Elevation Gain</b>: ' . htmlspecialchars($hikeElevation) . ' m</p>';
                            echo '<p><b>Injuries</b>: ' . htmlspecialchars($hikeInjuries) . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo "No hikes found.";
                    }
                } else {
                    echo "Choose a hike.";
                }
                ?>
            </div>
        </div>
        <div class="post">
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
    <?php include('metcalculator.php'); ?>
    <div style="clear:both; height: 1px"></div>
</div>
<?php require_once 'components/footer.php'; ?>
