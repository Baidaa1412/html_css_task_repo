<?php
$stringWithTrailingDash = "baidaa ali----";

// Remove the trailing dash from the string
$trimmedString = rtrim($stringWithTrailingDash, "-");

echo "String with trailing dash: " . $stringWithTrailingDash . PHP_EOL."<br>";
echo "Trimmed string: " . $trimmedString . PHP_EOL;
?>
