<?php
    // 1. DEFINE CONVERSION RATES (To Grams)
    // We list how much 1 unit is in Grams.
    $to_gram = [
        "milligram" => 0.001,
        "gram"      => 1,
        "kilogram"  => 1000,
        "ounce"     => 28.3495,
        "pound"     => 453.592
    ];

    $result = ""; // Variable to store the answer

    // 2. PROCESS FORM SUBMISSION
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $value = floatval($_POST['value']);
        $from_unit = $_POST['from_unit'];
        $to_unit = $_POST['to_unit'];

        // Calculate: (Value * From_Rate) / To_Rate
        // Example: 1kg to grams -> (1 * 1000) / 1 = 1000 grams
        $base_value = $value * $to_gram[$from_unit];
        $converted_value = $base_value / $to_gram[$to_unit];
        
        // Format the number
        $result = "$value $from_unit = " . round($converted_value, 4) . " $to_unit";
    }
?>

<?php include 'header.php'; ?>

<div class="form-section">

    <?php if ($result): ?>
        
        <div class="result-box" style="text-align: center;">
            <p style="font-size: 1.5rem;">Result of your calculation:</p>
            <h2 style="font-size: 2rem; margin: 10px 0; color: #333;">
                <?php echo $result; ?>
            </h2>
            
            <a href="weight.php" class="reset-btn" style="
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
            
            <label>Enter the weight to convert</label>
            <input type="number" name="value" required step="any" min="0">

            <label>Unit to Convert from</label>
            <select name="from_unit">
                <option value="milligram">Milligram</option>
                <option value="gram">Gram</option>
                <option value="kilogram">Kilogram</option>
                <option value="ounce">Ounce</option>
                <option value="pound">Pound</option>
            </select>

            <label>Unit to Convert to</label>
            <select name="to_unit">
                <option value="milligram">Milligram</option>
                <option value="gram">Gram</option>
                <option value="kilogram">Kilogram</option>
                <option value="ounce">Ounce</option>
                <option value="pound">Pound</option>
            </select>

            <input type="submit" value="Convert">
            
        </form>

    <?php endif; ?>

</div>

    </div> </body>
</html>