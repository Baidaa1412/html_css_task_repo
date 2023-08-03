<?php
$url = 'https://www.w3schools.com/php/default.asp';

// Get the components of the URL
$components = parse_url($url);

// Extract and display the components
echo "Scheme: " . $components['scheme'] . "<br>";
echo "Host: " . $components['host'] . "<br>";
echo "Path: " . $components['path'] . "<br>";
echo "Query: " . $components['query'] . "<br>";
echo "Fragment: " . $components['fragment'] . "<br>";
?>
