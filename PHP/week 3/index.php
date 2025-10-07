<?php
$sum = sum(4, 5);
echo($sum);
function sum($a, $b){
    return $a+ $b;
}
function swap($a, $b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = 5;
$b = 6;
echo("number a is" . $a);
echo ("<br/>");
echo("number b is" . $b);
swap($a, $b);
echo("<br/>After swap <br/>");
echo("number a is" . $a);
echo ("<br/>");
echo("number b is" . $b);

?>