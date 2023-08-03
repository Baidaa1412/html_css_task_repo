<?php
function sum_or_triple($int1, $int2) {
    if ($int1 == $int2) {
        return 3 * ($int1 + $int2);
    }
    return $int1 + $int2;}
// Example usage:
$int1 = 2;
$int2 = 2;
$result = sum_or_triple($int1, $int2);

echo "Result: $result";
?>
