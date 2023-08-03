<?php
$numbers = array(80, 50, 84, 70, 62,68,44,85,74,73);

// Calculate the average of the numbers
$average = array_sum($numbers) / count($numbers);
$minimum = min($numbers);
$maximum = max($numbers);
rsort($numbers);
$fiveHighest = array_slice($numbers, 0, 5);
sort($numbers);
$fivelowest = array_slice($numbers, 0, 5);

echo "Numbers: " . implode(", ", $numbers) . "<br>";
echo "Average: " . $average . "<br>";
echo "Minimum: " . $minimum . "<br>";
echo "Maximum: " . $maximum ."<br>";
print_r($fiveHighest);
echo "<br>";
print_r($fivelowest);
?>
