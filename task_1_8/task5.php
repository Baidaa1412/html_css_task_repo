<?php
$fruits = array(1,2,3,4,5);

// Inserting "grape" at index 1
$fruits[3] = "$";

// Now the array will be: array("apple", "grape", "orange")
echo "<pre>";
print_r($fruits);
echo "</pre>"
?>
