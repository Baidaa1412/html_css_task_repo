<?php


$names = array("red", "green", "orange");

// Convert all elements to uppercase
$uppercaseNames = array_map('strtoupper', $names);

// Output the uppercase array
print_r($uppercaseNames);

?>
