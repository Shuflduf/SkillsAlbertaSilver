<?php
$page = 'hiking';
require_once 'components/header.php';
require_once 'db_connect.php';

function getBaseRisk($difficulty) {
    $baseRisk = [
        'easy' => 0.01,
        'medium' => 0.03,
        'hard' => 0.07
    ];
    return isset($baseRisk[strtolower($difficulty)]) ? $baseRisk[strtolower($difficulty)] : 0.03;
}

function getInjuriesLast10Years($hikeid, $conn) {
    $currentYear = date('Y');
    $query = "SELECT SUM(Inj_InjuryCount) as total_injuries 
              FROM INJ_Injuries 
              WHERE HIK_ID = ? 
              AND INJ_Year > ?";
    
    $stmt = $conn->prepare($query);
    $tenYearsAgo = $currentYear - 10;
    $stmt->bind_param('ii', $hikeid, $tenYearsAgo);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    return $row['total_injuries'] ?? 0;
}

function calculateInjuryProbability($difficulty, $hikeid, $lengthKM, $durationMin, $conn) {
    $injuriesLast10Years = getInjuriesLast10Years($hikeid, $conn);
    $baseRisk = getBaseRisk($difficulty);
    
    $injuryMultiplier = 1 + ($injuriesLast10Years / 100);
    $exposureFactor = ($lengthKM * $durationMin) / 1000;
    
    $riskScore = $baseRisk * $injuryMultiplier * $exposureFactor;
    
    return max(0, min($riskScore, 1));
}
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
                            
                            // Calculate injury probability
                            $injuryProb = calculateInjuryProbability(
                                $hikeDifficulty, 
                                $selectedHike, 
                                $hikeLength, 
                                $hikeTime, 
                                $conn
                            );
                            $riskPercentage = round($injuryProb * 100, 1);
                            
                            echo '<div class="hike-entry">'; 
                            echo '<h1>' . htmlspecialchars($hikeName) . '</h1><br>';
                            echo '<h2>' . htmlspecialchars($hikeDesc) . '</h2><br>';
                            echo '<p><b>Length</b>: ' . htmlspecialchars($hikeLength) . ' km</p>';
                            echo '<p><b>Difficulty</b>: ' . htmlspecialchars($hikeDifficulty) . '</p>';  
                            echo '<p><b>Time</b>: ' . htmlspecialchars($hikeTime) . ' minutes</p>';
                            echo '<p><b>Elevation Gain</b>: ' . htmlspecialchars($hikeElevation) . ' m</p>';
                            echo '<p><b>Injuries</b>: ' . htmlspecialchars($hikeInjuries) . '</p>';
                            echo '<p><b>Injury Risk</b>: ' . $riskPercentage . '%</p>';
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
    <?php include('metcalculator.php'); ?>
    </div>
    <div style="clear:both; height: 1px"></div>
</div>
<?php require_once 'components/footer.php'; ?>
