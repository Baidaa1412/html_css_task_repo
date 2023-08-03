<?php
// Sample string
$string = 'PHP Tutorial';

// Function to change the color of the first character
function changeFirstCharacterColor($str) {
    $words = explode(' ', $str);
    $firstWord = $words[0];

    if (!empty($firstWord)) {
        // Get the first character of the first word
        $firstCharacter = mb_substr($firstWord, 0, 1);

        // Get the rest of the word
        $restOfWord = mb_substr($firstWord, 1);

        // Apply the color to the first character
        $coloredWord = '<span style="color: red;">' . $firstCharacter . '</span>' . $restOfWord;

        // Replace the first word with the colored version
        $words[0] = $coloredWord;
    }

    return implode(' ', $words);
}

// Call the function and display the result
$coloredString = changeFirstCharacterColor($string);
echo $coloredString;
?>
