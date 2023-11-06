<?php
$value1 = 3;
$value2 = -4;

if (($value1 > 0 && $value2 < 0) || ($value1 < 0 && $value2 > 0)) {
    echo "One value is positive, and the other is negative.";
} else {
    echo "Both values have the same sign (either both positive or both negative).";
}
?>
