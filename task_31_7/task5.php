<?php
$email = "baidaaakhalaf@example.com";
$atPosition = strpos($email, "@");

if ($atPosition !== false) {
    $username = substr($email, 0, $atPosition);
    echo "Username: " . $username;
} else {
    echo "Invalid email address format.";
}
?>