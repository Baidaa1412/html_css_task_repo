<?php
$inputString = "My Name Baidaa!";
$uppercaseString = strtoupper($inputString);
echo $uppercaseString."<br>";

$inputString1 = "My Name Baidaa!";
$lowercaseString=strtolower($inputString);
echo $lowercaseString."<br>";

$inputString = "my name baidaa!";
$firstLetterUppercase = ucfirst($inputString);
echo $firstLetterUppercase."<br>"; 

$inputString = "my name baidaa!";
$firstLetterUppercase = ucwords($inputString);
echo $firstLetterUppercase; 

?>
