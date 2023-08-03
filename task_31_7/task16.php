<?php
$stringWithSpecialChars = "78569! @#14583$%^";

// Remove special characters using regular expression
$filteredString = preg_replace('/[^A-Za-z0-9 ]/', '', $stringWithSpecialChars);

echo "Original String: " . $stringWithSpecialChars . PHP_EOL;
echo "Filtered String: " . $filteredString . PHP_EOL;
?>
