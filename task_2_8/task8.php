<?php
function elec($num) {
    if ($num <= 50) {
        return $num * 2.5;
    } else if ($num > 50 && $num < 150) {
        return 50 * 2.5 + ($num - 50) * 5;
    } else if ($num > 150 && $num < 250) {
        return 50 * 2.5 + 100 * 5 + ($num - 150) * 6.2;
    } else {
        return 50 * 2.5 + 100 * 5 + 100 * 6.2;
    }
    return false;
}

// Example usage:
$num = 40;
$reslut = elec($num);
echo "result: $reslut ";
?>
