<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Quantity</label>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $item="pizza";
    $price=299;
    $quantity = $_POST["quantity"];
    $total=null;

    $total = $quantity * $price;

    echo "you have ordered {$quantity} x {$item}/s";
    echo "your total is \${total}";
?>