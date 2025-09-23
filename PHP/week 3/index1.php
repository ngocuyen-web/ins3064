<!DOCTYPE html
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
           <?php
           // http://localhost:8088/week%203/index1.php/?x=5
           $x = $_GET["x"]; 
           $y = $_GET["y"];
              echo "x + y = " . ($x + $y) . "<br/>";
              echo "x == y: " . ($x == $y) . "<br/>";
            $name = "Mr. A";
             $age = 20;
             $course = array("Java","C","PHP");
             echo "Name:".$name.",age:".$age.
             "<br/3rd course is: " . $course[2];
             ?>
    </body>
</html>
