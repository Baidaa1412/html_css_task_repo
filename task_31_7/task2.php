<?php
$numericString = "545588";
$formattedString = implode(':', str_split($numericString, 2));
echo $formattedString;

?>