<?php
$sequence = '';
for ($i = 1; $i <= 10; $i++) {
    $sequence .= $i . '-';
}

// Remove the last hyphen from the sequence
$sequence = rtrim($sequence, '-');

echo $sequence;
?>
