<?php
function printArray(array $array, int &$count){
    $count = count($array); 
    return print_r($array);
}

// $number = [2,4,1,6];
$dem = 0;
printArray([123,3,6,5], $dem);
echo $dem; // 4

?>