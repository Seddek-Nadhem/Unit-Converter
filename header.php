<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Converter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="converter-container">
        <h1>Unit Converter</h1>

        <div class="nav-tabs">
            <?php
                // Get the current file name (e.g., "length.php" or "weight.php")
                // $_SERVER['PHP_SELF'] gets the whole link
                // basename() get the file name only 
                $current_page = basename($_SERVER['PHP_SELF']);
            ?>
            
            <a href="length.php" class="<?php echo ($current_page == 'length.php' || $current_page == 'index.php') ? 'active' : ''; ?>">Length</a>           
            <a href="weight.php" class="<?php echo ($current_page == 'weight.php') ? 'active' : ''; ?>">Weight</a>
            <a href="temperature.php" class="<?php echo ($current_page == 'temperature.php') ? 'active' : ''; ?>">Temperature</a>

        </div>