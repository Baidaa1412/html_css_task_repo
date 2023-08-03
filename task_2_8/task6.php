<?php
function is_range($num) {
    if ($num > 020 && $num <50) {
        return true;
    }
    return false;
}

// Example usage:
$number =30;
if (is_range($number)) {
    echo "$number true";
} else {
    echo "$number false";
}
?>