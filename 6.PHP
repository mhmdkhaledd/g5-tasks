<?php
$number = 20; 

if ($number > 0) {
    if ($number % 5 == 0) {
        echo "The number is a multiple of 5.";
    } elseif ($number % 8 == 0) {
        echo "The number is a multiple of 8.";
    } else {
        echo "The number is not a multiple of 5 or 8.";
    }
} 
?>
