<?php
function is_leap_year($year) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                return true;
            }
            return false;
        }
        return true;
    }
    return false;
}

// Example usage:
$year = 2013;
if (is_leap_year($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}


?>