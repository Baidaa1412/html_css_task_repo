<?php
function is_multiple_of_three($num) {
    if ($num > 0 && $num % 3 == 0) {
        return true;
    }
    return false;
}

// Example usage:
$number = 9;
if (is_multiple_of_three($number)) {
    echo "$number is a multiple of 3.";
} else {
    echo "$number is not a multiple of 3.";
}
?>