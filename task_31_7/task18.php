<?php
$numberWithCommas = "1,234,567.89";

// Remove commas from the number
$numberWithoutCommas = str_replace(',', '', $numberWithCommas);

echo "Number with commas: " . $numberWithCommas . PHP_EOL;
echo "Number without commas: " . $numberWithoutCommas . PHP_EOL;
?>
