<?php
    // 1. DEFINE CONVERSION RATES (To Meter)
    // We list how much 1 unit is in Meters.
    // Example: 1 Kilometer = 1000 Meters.
    $to_meter = [
        "millimeter" => 0.001,
        "centimeter" => 0.01,
        "meter"      => 1,
        "kilometer"  => 1000,
        "inch"       => 0.0254,
        "foot"       => 0.3048,
        "yard"       => 0.9144,
        "mile"       => 1609.34
    ];

    $result = null; // Variable to store the answer

    // 2. PROCESS FORM SUBMISSION
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $value = floatval($_POST['value']);
        $from_unit = $_POST['from_unit'];
        $to_unit = $_POST['to_unit'];

        // Calculate: (Value * From_Rate) / To_Rate
        // Example: 100cm to meters -> (100 * 0.01) / 1 = 1 meter
        $base_value = $value * $to_meter[$from_unit];
        $converted_value = $base_value / $to_meter[$to_unit];
        
        // Format the number (avoid long decimals like 1.00000002)
        // We store the result in a string like "10 meter = 0.01 kilometer"
        $result = "$value $from_unit = " . round($converted_value, 4) . " $to_unit";
    }

    include 'header.php'; 
?>

<div class="form-section">

    <?php if ($result): ?>
        
        <div class="result-box" style="text-align: center;">
            <p>Result of your calculation:</p>
            <h2 style="font-size: 2rem; margin: 10px 0; color: #333;">
                <?php echo $result; ?>
            </h2>
            
            <a href="length.php" class="reset-btn" style="
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
            
            <label>Enter the length to convert</label>
            <input type="number" name="value" required step="any">

            <label>Unit to Convert from</label>
            <select name="from_unit">
                <option value="millimeter">Millimeter</option>
                <option value="centimeter">Centimeter</option>
                <option value="meter">Meter</option>
                <option value="kilometer">Kilometer</option>
                <option value="inch">Inch</option>
                <option value="foot">Foot</option>
                <option value="yard">Yard</option>
                <option value="mile">Mile</option>
            </select>

            <label>Unit to Convert to</label>
            <select name="to_unit">
                <option value="millimeter">Millimeter</option>
                <option value="centimeter">Centimeter</option>
                <option value="meter">Meter</option>
                <option value="kilometer">Kilometer</option>
                <option value="inch">Inch</option>
                <option value="foot">Foot</option>
                <option value="yard">Yard</option>
                <option value="mile">Mile</option>
            </select>

            <input type="submit" value="Convert">
            
        </form>

    <?php endif; ?>

</div>

    </div> </body>
</html>