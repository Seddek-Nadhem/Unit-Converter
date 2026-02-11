<?php include 'header.php'; ?>

<div class="form-section">
    
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
</div>

</div> </body>
</html>