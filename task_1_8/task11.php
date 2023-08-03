<?php
$strings = array("apple", "banana", "orange", "kiwi", "grapefruit");

// Initialize variables to keep track of the longest string and its length
$longestString = "";
$maxLength = 0;





// Loop through the array to find the longest string
foreach ($strings as $string) {
    $length = strlen($string);
    if ($length > $maxLength) {
        $longestString = $string;
        $maxLength = $length;
    }
}
$lowestString = "";
$minLength =  PHP_INT_MAX;
foreach ($strings as $string) {
    $length = strlen($string);
    if ($length < $minLength) {
        $lowestString = $string;
        $minLength = $length;
    }
}

// Output the longest string
echo "Longest String: " . $longestString . PHP_EOL;
echo "Length: " . $maxLength."<br>";
echo "shortest String: " . $lowestString . PHP_EOL;
echo "Length: " . $minLength;
?>
