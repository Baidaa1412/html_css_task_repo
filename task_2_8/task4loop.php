<?php
$grid = array(
    array('1', '1', '1', '1', '1'),
    array('1', '2', '2', '2', '2'),
    array('2', '2', '3', '3', '3'),
    array('1', '4', '4', '4', '4'),
    array('5', '5', '5', '5', '5'),
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