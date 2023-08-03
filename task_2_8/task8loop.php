<?php
function countCharacterOccurrences($inputString, $character) {
    $count = substr_count($inputString, $character);
    return $count;
}

$inputString = "orange coding academy "; // Replace this with your desired input string.
$characterToCount = 'c'; // Replace this with the character you want to count.
$occurrences = countCharacterOccurrences($inputString, $characterToCount);

echo "Occurrences of '$characterToCount' in the string \"$inputString\": $occurrences";


?>