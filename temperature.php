<?php include 'header.php'; ?>

    <div class="form-section">
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
    </div>

</div> 
</body>
</html>