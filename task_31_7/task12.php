<?php

$originalString = "The brown fox .";
$stringToInsert = " quick ";
$position = 4;

$modifiedString = substr_replace($originalString, $stringToInsert, $position, 0);
echo $modifiedString;
?>