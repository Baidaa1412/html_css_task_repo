<?php
$inputLetter = 'z';

// Convert the input letter to its ASCII value
$asciiValue = ord($inputLetter);

// Check if the input letter is a lowercase letter (ASCII values for lowercase letters are from 97 to 122)
// If so, wrap around to 'a' for 'z'
if ($asciiValue >= 97 && $asciiValue <= 122) {
    $nextLetterAscii = ($asciiValue - 97 + 1) % 26 + 97;
} else {
    // Check if the input letter is an uppercase letter (ASCII values for uppercase letters are from 65 to 90)
    // If so, wrap around to 'A' for 'Z'
    if ($asciiValue >= 65 && $asciiValue <= 90) {
        $nextLetterAscii = ($asciiValue - 65 + 1) % 26 + 65;
    } else {
        echo "Invalid input. Please enter an uppercase or lowercase letter.";
        exit;
    }
}

// Convert the ASCII value back to the character and print the next letter
$nextLetter = chr($nextLetterAscii);
echo "Next letter: " . $nextLetter;
?>