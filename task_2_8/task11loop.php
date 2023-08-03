<?php
$number = 1;
$height = 5; // Change this value to control the height of the triangle.

for ($row = 1; $row <= $height; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo $number . ' ';
        $number++;
        if ($number > 15) {
            break 2; // Exit both loops when number exceeds 15.
        }
    }
    echo "<br>";
}
?>