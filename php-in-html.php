<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in HTML</title>
</head>
<body>

<h1>
    <?= 'Hello World man' ?>
</h1>

<?php 
    // comment
    # comment 2
    /*
        multi-line comment
    */
    $x  = 10;
    $y = 10;

    echo '<p>' . $x . ', ' . $y .  '</p>';


# comment ?>
    
</body>
</html>