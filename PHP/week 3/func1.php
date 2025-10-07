<?php
function findMin($a, $b, $c) {
    return min($a, $b, $c);
}

$a = 10;
$b = 5;
$c = 7;
echo "Số nhỏ nhất là: " . findMin($a, $b, $c);
echo  ("number a is" . $a);
echo ("<br/>");
echo ("number b is" . $b);
swap($a, $b);
?>