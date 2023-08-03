<?php
$word = "my name baidaa ali ";
$specificString = "baidaa";

if (strpos($word, $specificString) !== false) {
    echo "The word found";
} else {
    echo "The word does not found";
}
?>