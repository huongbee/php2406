<?php
$arrNumber = array(1,3,5,7,9);
$arrString = [
    'key' => 'PHP',
    3 => 'MySql',
    'HTML'
];
// for($i = 0; $i < count($arrNumber); $i++){
//     echo $arrNumber[$i].' ';
// }

// $backend = [ 'PHP', 'MySQL' ];
// $frontEnd = [ 'HTML', 'CSS', 'JS', 'Angular' ];
$level3 = array('AngularJS', 'Angular 8');
$arrSubject = [
    'backend' => [ 'PHP', 'MySQL' ],
    'frontend' => [ 'HTML', 'CSS', 'JS', 'Angular' => $level3 ]
];
print_r($arrSubject['frontend']['Angular'][1]);

// $newArr = [
//     0 => [
//         12
//     ]
// ];

// echo $newArr[0]['key'];

?>