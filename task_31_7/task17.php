<?php
$string = "This is a sample string with more than five words.";

// Get the words as an array
$wordsArray = explode(' ', $string);

// Select the first five words
$firstFiveWords = implode(' ', array_slice($wordsArray, 0, 5));

echo "Original String: " . $string . PHP_EOL."<br>";
echo "First Five Words: " . $firstFiveWords . PHP_EOL;
?>
