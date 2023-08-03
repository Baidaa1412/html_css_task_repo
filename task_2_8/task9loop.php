<?php
$rows = 5; // Change this value to control the number of rows in the multiplication table.
$cols = 5; // Change this value to control the number of columns in the multiplication table.
$cellpadding = "3px";

echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th style='padding: $cellpadding;'></th>";

// Header row with column numbers (1 to $cols)
for ($col = 1; $col <= $cols; $col++) {
    echo "<th style='padding: $cellpadding;'>$col</th>";
}

echo "</tr>";

// Generate rows and columns for the multiplication table
for ($row = 1; $row <= $rows; $row++) {
    echo "<tr><th style='padding: $cellpadding;'>$row</th>";
    for ($col = 1; $col <= $cols; $col++) {
        $result = $row * $col;
        echo "<td style='padding: $cellpadding;'> $col* $row = $result</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
