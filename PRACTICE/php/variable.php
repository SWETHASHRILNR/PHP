<!DOCTYPE html>
<html>
    <body>
        <h1>VARIABLES</h1>

        <?php
        $x=5; //global scope

        $y=2;
        $z=3;

        function myTest()
        {
            $x=10; //local scope
            echo "<p>Variable x is storing value $x <p>";
            echo $GLOBALS['x'];
            global $y,$z;
            $y=$y+$z;
        }
        myTest();
        echo "<p>X has $x<p>";
        echo $y;
        ?>
    <h1>STATIC VARIABLE</h1>
    <?php
    function myscope()
    {
        static $x=0;
        echo $x;
        $x++;
    }
    myscope();
    myscope();
    myscope();
    ?>
        </body>
        </html>