<?php

/**
 * 1
 * viết function truyền vào ($length) độ dài, trả về 1 chuỗi kí tự tương ứng với độ dài đó
 * (random 1 string theo độ dài truyền vào)
 *  $length = 20 => cg112e332vjnqwer34qh
 *  $length = 10 => afwwer34qh
 * 
 *  initString = '0987654321lkjhgfds';
 *  $initString[17];
 *  for from 1->$length
 */
function randomString($length = 40){
    $initString = '1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm';
    $token = '';
    $maxLength = strlen($initString) - 1; // 61
    for ($i=1; $i<=$length ; $i++) { 
        $token .= $initString[rand(0,$maxLength)];
    }
    return $token;
}

echo randomString(20); 
//8cOkx6gA7bYck9M6EaPGo8tydxenYvQrgSFORT0i
//zCTA2dy1tiiOsqUN7CCBoI5lujA7ph2he4hK9hNl
//bPjmv4NF5xUhPDP8NUMX3W2szuVx4xzUseEPk3sH
//APEY150oPh4UJoIFFXKT
?>