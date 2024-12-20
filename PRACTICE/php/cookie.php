<?php
    setcookie("fav_food", "dosa", time(), (86400 *2), "/");
    setcookie("fav_snack", "chaat", time(), (86400 *2), "/");
    setcookie("fav_drink", "water", time(), (86400 *2), "/");
/* 
    foreach($_COOKIE as $key=>$value)
    {
        echo "{$key} = {$value}<br>";
    } */

    if(isset($_COOKIE["fav_food"]))
    {
        echo "BUY SOME {$_COOKIE["fav_food"]}!!!";
    }
    else
    {
        echo "I don't know";
    }
?>