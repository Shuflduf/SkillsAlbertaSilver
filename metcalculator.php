<script>

    function estimateCalories(distanceKM, elevationGainM, timeHRS, hikerWeightKG = 0, backpackKG = 0) {
        
        var gradePercent = (elevationGainM / distanceKM)*100;
    
        let met;

        if (gradePercent < 1) {
            met = 6.0;
        } else if (gradePercent < 6) {
            met = 7.3;
        } else if (gradePercent < 15) {
            met = 9.0;
        } else {
            met = 10.0;
        }

        if (backpackKG >= 5) met += 1.0;
        if (backpackKG >= 15) met += 1.0; // additional bump for heavy loads

        // Calories burned = MET × Weight (kg) × Time (hrs)

        let caloriesBurned = met*(hikerWeightKG)*timeHRS;

        let caloriesBurnedDisplay = `${caloriesBurned}` + " Calories Burned";

        document.getElementById('caloriesBurned').innerText = caloriesBurnedDisplay;

    }

</script>

<?php
if (is_numeric($selectedHike)) {
    $sql = "SELECT * FROM HIK_Hikes WHERE HIK_ID=" . $selectedHike;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // get the first row only

        // assign to variables
        $hikeName = $row["HIK_Name"];
        $hikeLengthKilometers = $row["HIK_LengthKilometers"]; 
        $hikeElevationGainMeters = $row["HIK_ElevationGainMeters"]; 
        $hikeTimeHours = $row["HIK_TimeLengthMinutes"];     

    } else {
        echo "Error occured returning selected hike.";
    }
}
else
{
    $hikeName = "Choose a hike OR enter your own values";
}
?>

<div id="sidebar">
    <div id="sidebar-bgtop">
        <div id="sidebar-bgbtm">
        <strong><label><?= $hikeName ?></label></strong><br/>
                <table>
                    <tr>
                        <td><label for="distance">Distance (km):</label></td>
                        <td><input type="number" id="distance" name="distance" value="<?= $hikeLengthKilometers ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="elevation">Elevation Gain (m):</label></td>
                        <td><input type="number" id="elevation" name="elevation" value="<?= $hikeElevationGainMeters ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="time">Time (hrs):</label></td>
                        <td><input type="number" id="time" name="time" value="<?= $hikeTimeHours ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="weight">Hiker's Weight (kg):</label></td>
                        <td><input type="number" id="weight" name="weight"></td>
                    </tr>
                    <tr>
                        <td><label for="backpack">Backpack Weight (kg):</label></td>
                        <td><input type="number" id="backpack" name="backpack"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <button 
                            onclick="estimateCalories(
                            document.getElementById('distance').value, 
                            document.getElementById('elevation').value, 
                            document.getElementById('time').value, 
                            document.getElementById('weight').value, 
                            document.getElementById('backpack').value);">Calculate</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <label id="caloriesBurned"></label>
                        </td>
                    </tr>
                </table>
            
        </div>
    </div>
</div>