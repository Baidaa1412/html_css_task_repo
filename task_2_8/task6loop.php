<?php
function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($n == 0) {
        return 1;
    } else {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

$number = 5; // Change this value to calculate the factorial of a different number.
echo "Factorial of $number is: " . factorial($number);
?>