<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>x:</label>
        <input type="text" name="x">
        <input type="submit" value="calculate">
</form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $total = null;

    //$total = abs($x);
    //$total = round($x);
    $total = abs($x);
    //floor(),ceil(),min(),max(),pi(),sqrt(),pow()
    //rand()

    echo $total;
?>