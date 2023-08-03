<?php


$names = array("RED", "GREEN", "ORANGE");

// Convert all elements to uppercase
$uppercaseNames = array_map('strtolower', $names);

// Output the uppercase array
print_r($uppercaseNames);

?>