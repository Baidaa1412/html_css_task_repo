<?php
$fruits = array(
   "a" =>  "banana",
    "d"=>  "apple",
   "c" => "orange" ,
     "b"=> "grape"
);

// Sort the array by values in ascending order while maintaining the key-value associations
asort($fruits);

// Output the sorted array
print_r($fruits);

?>
