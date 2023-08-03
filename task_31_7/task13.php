
<?php
$longNumber = "100025322000";

$numberWithoutZeros = str_replace('0', '', $longNumber);

echo "num: ". $longNumber . PHP_EOL."<br>";
echo "num without zero" . $numberWithoutZeros . PHP_EOL;
?>
