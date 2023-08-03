<?php
$grid = array(
    array('1', '0', '0', '0', '0'),
    array('0', '2', '0', '0', '0'),
    array('0', '0', '3', '0', '0'),
    array('0', '0', '0', '4', '0'),
    array('0', '0', '0', '0', '5'),
);

for ($i = 0; $i < count($grid); $i++) {
    for ($j = 0; $j < count($grid[$i]); $j++) {
        if ($grid[$i][$j] !== '') {
            echo $grid[$i][$j] . ' ';
        }
    }
    echo "<br>";
}
