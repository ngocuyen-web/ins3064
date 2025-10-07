<!DOCTYPE html
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // http://localhost:8088/week%203/index2.php/?x=5
        $x = $_GET["x"]; 
        $y = $_GET["y"];
        echo "x + y = " . ($x + $y) . "<br/>";
        echo "x == y: " . ($x == $y) . "<br/>";
        $x = 10;
        $y = 11;
        echo "x: " . $x . "<br/>";
        echo "y: " . $y . "<br/>";
        echo "x/y: " . ($x / $y) . "<br/>";
        echo "x%y: " . ($x % $y) . "<br/>";
        echo "x++: " . ($x++) . "<br/>";
        echo "++y: " . (++$y) . "<br/>";
        ?>
    </body>
</html>