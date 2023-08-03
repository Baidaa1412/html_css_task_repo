<?php
$min = 11;
$max = 20;

$randomNumbers = array();

for ($i = 0; $i < 5; $i++) {
    $randomNumbers[] = rand($min, $max);
}
print_r($randomNumbers);
?>
