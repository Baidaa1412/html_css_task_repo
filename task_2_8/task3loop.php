<?php
$grid = array(
    array('A', 'A', 'A', 'A', 'A'),
    array('A', 'A', 'A', 'B', 'B'),
    array('A', 'A', 'C', 'C', 'C'),
    array('A', 'D', 'D', 'D', 'D'),
    array('E', 'E', 'E', 'E', 'E'),
);

for ($i = 0; $i < count($grid); $i++) {
    for ($j = 0; $j < count($grid[$i]); $j++) {
        if ($grid[$i][$j] !== '') {
            echo $grid[$i][$j] . ' ';
        }
    }
    echo "<br>";
}


?>
