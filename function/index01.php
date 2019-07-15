<?php

function getData(string $name='Noname'): string{
    return 'Hello '.$name;
}
$a = getData();
// echo $a;
// echo number_format(2000000);
/**
 * viết function truyền vào ($length) độ dài, trả về 1 chuỗi kí tự tương ứng với độ dài đó
 * (random 1 string theo độ dài truyền vào)
 *  $length = 20 => cg112e332vjnqwer34qh
 *  $length = 10 => afwwer34qh
 * 
 *  initString = '0987654321lkjhgfds';
 *  $initString[17];
 *  for from 1->$length
 */

$initString = '9876543210lkjhgfds';
echo $initString[17];


?>