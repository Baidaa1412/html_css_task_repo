
<?php
function vote($age) {
    if ($age>= 18) {
        return "you can voting";
    }
    return "you cant voting";
}

// Example usage:

echo vote(2);
?>