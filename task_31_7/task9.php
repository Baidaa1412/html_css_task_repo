<?php
$string1 = "dragonboll";
$string2 = "dragonball";

// Find the length of the common prefix between the two strings
$commonPrefixLength = strspn($string1 ^ $string2, "\0");

if ($commonPrefixLength === strlen($string1) && $commonPrefixLength === strlen($string2)) {
    echo "No differing characters found.";
} else {
    echo "First differing character found at position $commonPrefixLength: " . $string2[$commonPrefixLength];
}

?>