<?php
function swap($a, $b){
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo("<br/>After swap <br/>");
    echo("number a is" . $a);
    echo ("<br/>");
    echo("number b is" . $b);
}   
?>