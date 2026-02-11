<?php include 'header.php'; ?>

    <div class="form-section">
        <form action="" method="POST">
            
            <label>Enter the weight to convert</label>
            <input type="number" name="value" required step="any">

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
    </div>

</div> 
</body>
</html>