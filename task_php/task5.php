<?php $currentFilePath = $_SERVER['PHP_SELF'];

// Use basename() function to extract just the file name
$currentFileName = basename($currentFilePath);

// Display the current file name
echo "Current File Name: " . $currentFileName;
?>