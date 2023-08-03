<?php
$originalString = "Hello, World! This is a sample string.";
$startPosition = 18; // Starting position of the substring to remove
$lengthToRemove = 7; // Length of the substring to remove

// Remove a portion of the original string based on position
$newString = substr_replace($originalString, '', $startPosition, $lengthToRemove);

echo "Original String: " . $originalString . PHP_EOL;
echo "New String: " . $newString . PHP_EOL;
?>
