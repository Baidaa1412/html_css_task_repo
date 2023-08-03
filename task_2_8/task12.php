<?php
function get_grade($scores) {
    $grades = array();

    foreach ($scores as $score) {
        if ($score >= 90) {
            $grades[] = 'A';
        } elseif ($score >= 80) {
            $grades[] = 'B';
        } elseif ($score >= 70) {
            $grades[] = 'C';
        } elseif ($score >= 60) {
            $grades[] = 'D';
        } else {
            $grades[] = 'F';
        }
    }

    return $grades;
}

$scores = array(85, 92, 78, 60, 45);
$grades = get_grade($scores);

echo "Grades: " . implode(', ', $grades);
?>
