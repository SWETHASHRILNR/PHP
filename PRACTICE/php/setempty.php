<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <label>Password:</label>
        <input type="password" name="password">
        <input type="submit" name="login" value="log in">
</form>
</body>
</html>
<?php
/*
    foreach($_POST as $key=>$value)
    {
        echo "{$key} = {$value} <br>";
    }
*/

if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username))
    {
        echo "username missing";
    }
    elseif(empty($password))
    {
        echo "password missing";
    }
    else{
        echo "Hello {$username}";
    }
    //echo "you tried to login";
}
    /*$username = "Swetha";
    echo isset($username);*/

    /*
    $username = true;
    if(isset($username))
    {
        echo "This variable is set";
    }
    else
    {
        echo "This variable is notset";
    }
        
        $username = null;
        if(empty($username))
        {
            echo "This variable is empty";
        }
        else
        {
            echo "This variable is not empty";
        }
            */
?>