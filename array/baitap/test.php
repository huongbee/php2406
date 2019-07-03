<?php
$arr = [
    [
        'name' => 'Ten 1',
        'price' => 12000
    ],
    [
        'name' => 'Ten 2',
        'price' => 10000.4573456
    ]
];
// Ten 1 - 12.000
// Ten 2 - 10.000

echo '<div>';
foreach($arr as $p){
    echo $p['name'] . ' - '. number_format($p['price'], 2, ',', '.');
    echo "<br>";
}

?>