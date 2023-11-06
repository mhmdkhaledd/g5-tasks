<?php
$number1=20;
$number2=30;
$number3=40;



if ($number1 >= $number2 && $number1 >= $number3) {
    echo "The largest number is: " . $number1;
} elseif ($number2 >= $number1 && $number2 >= $number3) {
    echo "The largest number is: " . $number2;
} else {
    echo "The largest number is: " . $number3;
}


?>