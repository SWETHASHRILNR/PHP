<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_post.php" method="POST">
    <label>Username:</label>
    <input type="text" name="username"><br>
    
    <label>Password:</label>
    <input type="password" name="password"><br>

    <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
echo $_POST["username"];
echo "<br>";
echo $_POST["password"];
echo "<br>{$_POST["username"]}<br>{$_POST["password"]}";
?>