<?php
include("database.php");
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
echo "<br>";
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row["id"]. "<br>";
        echo $row["user"]. "<br>";
        echo $row["reg_date"]. "<br>";
    }
}
else
{
    echo "not connected";
}
mysqli_close($conn);
?>