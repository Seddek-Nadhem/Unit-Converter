<?php
    $result = "";

    // 1. PROCESS FORM SUBMISSION
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $value = floatval($_POST['value']);
        $from_unit = $_POST['from_unit'];
        $to_unit = $_POST['to_unit'];

        // --- STEP 1: Convert EVERYTHING to Celsius first ---
        $celsius_value = 0;

        if ($from_unit == "celsius") {
            $celsius_value = $value;
        } elseif ($from_unit == "fahrenheit") {
            $celsius_value = ($value - 32) * 5/9;
        } elseif ($from_unit == "kelvin") {
            $celsius_value = $value - 273.15;
        }

        // --- STEP 2: Convert Celsius to TARGET unit ---
        $final_value = 0;

        if ($to_unit == "celsius") {
            $final_value = $celsius_value;
        } elseif ($to_unit == "fahrenheit") {
            $final_value = ($celsius_value * 9/5) + 32;
        } elseif ($to_unit == "kelvin") {
            $final_value = $celsius_value + 273.15;
        }

        // Format the result
        // Note: We use round(..., 2) because temp doesn't need 4 decimal places usually
        $result = "$value $from_unit = " . round($final_value, 2) . " $to_unit";
    }

    include 'header.php'; 
?>

<div class="form-section">

    <?php if ($result): ?>
        
        <div class="result-box" style="text-align: center;">
            <p style="font-size: 1.5rem;">Result of your calculation:</p>
            <h2 style="font-size: 2rem; margin: 10px 0; color: #333;">
                <?php echo $result; ?>
            </h2>
            
            <a href="temperature.php" class="reset-btn" style="
                display: inline-block;
                margin-top: 20px;
                padding: 10px 25px;
                background-color: white;
                border: 2px solid #333;
                border-radius: 8px;
                font-weight: bold;
                text-decoration: none;
                color: #333;
            ">Reset</a>
        </div>

    <?php else: ?>

        <form action="" method="POST">
            
            <label>Enter the temperature to convert</label>
            <input type="number" name="value" required step="any">

            <label>Unit to Convert from</label>
            <select name="from_unit">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="kelvin">Kelvin</option>
            </select>

            <label>Unit to Convert to</label>
            <select name="to_unit">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="kelvin">Kelvin</option>
            </select>

            <input type="submit" value="Convert">
            
        </form>

    <?php endif; ?>

</div>

    </div> </body>
</html>