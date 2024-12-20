<?php
    include("database.php");

   // $sql = "INSERT INTO users(user, password) VALUES ('SHIVANE','1234567')";
   $username = "Madhumathi";
   $password = "1234";
   //to hash the password
   $hash = password_hash($password, PASSWORD_DEFAULT);
   $sql = "INSERT INTO users(user, password) VALUES ('$username','$hash')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    Hello
</body>
</html>