
<?php
function is_summer($temp) {
    if ($temp <= 20) {
        return "winter";
    }
    return "summ";
}

// Example usage:
$temp = 13;
if (is_summer($temp) === "winter") {
    echo "$temp is winter temperature.";
} else {
    echo "$temp is a summer temperature.";
}
?>
