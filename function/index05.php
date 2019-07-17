<?php
// function printArray(array $array, int &$count){
//     $count = count($array); 
//     return print_r($array);
// }

// $number = [2,4,1,6];
// $dem = 0;
// printArray([123,3,6,5], $dem);
// echo $dem; // 4

function chia($soBiChia, $soChia){
    if($soChia==0) { 
        $a = new Error("Cannot division 0");
        throw $a;
    }
    return $soBiChia/$soChia;
}

try{
    $a = 10;
    // $a/0;
    echo chia($a, 0);
}
catch(Error $e){
    echo 'Error: '.$e->getMessage();
}


?>