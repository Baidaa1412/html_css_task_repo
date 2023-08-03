<?php
$size = 4; // Change this value to adjust the size of the diamond

// Function to print spaces
function printSpaces($n) {
    for ($i = 0; $i < $n; $i++) {
        echo " ";
    }
}

// Function to print letters in ascending order
function printLetters($startLetter, $numLetters) {
    for ($i = 0; $i < $numLetters; $i++) {
        echo chr(ord($startLetter) + $i);
    }
}

// Function to print the diamond pattern
function printDiamond($size) {
    for ($row = 0; $row < $size; $row++) {
        printSpaces($size - $row - 1);
        printLetters('A', $row * 2 + 1);
        echo"<br>";
    }

    for ($row = $size - 2; $row >= 0; $row--) {
        printSpaces($size - $row - 1);
        printLetters('A', $row * 2 + 1);
        echo "<br>";
    }
}

// Call the function with the desired size
printDiamond($size);
?>
