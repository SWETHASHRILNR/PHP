<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
</form>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference,2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    echo "Circumference = {$circumference}cm <br>";
    echo "Area = {area}cm^2 <br>";
?>