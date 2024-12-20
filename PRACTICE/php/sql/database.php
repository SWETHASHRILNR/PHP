<?php
 $db_server = "localhost";
 $user = "root";
 $db_pass = "Karthikeyan@7";
 $db_name = "php_db";
 $conn = "";

 try{
    $conn = mysqli_connect($db_server, $user, $db_pass, $db_name);
 }
 catch(mysqli_sql_exception)
 {
    echo "Not connected";
 }
 

 if($conn)
 {
    echo "You are connected";
 }
/*  else
 {
    echo "Not connected";
 } */
 ?>