<?php

$number1 = 30;
$number2 = 20;
function checkNumbers($num1, $num2) {
    if ($num1 == 50 || $num2 == 50 || ($num1 + $num2) == 50) {
        return true;
    } else {
        return false;
    }
}

$result = checkNumbers($number1, $number2);
var_dump($result);








?>