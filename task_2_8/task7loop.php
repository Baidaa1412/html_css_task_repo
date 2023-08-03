<?php
function fibonacci($terms) {
    $fibonacci_sequence = array(0, 1);

    for ($i = 2; $i < $terms; $i++) {
        $next_fibonacci = $fibonacci_sequence[$i - 1] + $fibonacci_sequence[$i - 2];
        $fibonacci_sequence[] = $next_fibonacci;
    }

    return $fibonacci_sequence;
}

$number_of_terms = 10; // Change this value to generate a different number of terms in the sequence.
$fibonacci_sequence = fibonacci($number_of_terms);

echo "Fibonacci sequence with $number_of_terms terms: ";
echo implode(", ", $fibonacci_sequence);
?>