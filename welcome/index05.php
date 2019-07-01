<?php

$nam = 2020;
$can = '';

switch($nam%10){
    case 1 : $can = 'Tân'; break;
    case 2 : $can = 'Nhâm'; break;
    case 3 : $can = 'Quý'; break;
    case 4 : $can = 'Giáp'; break;
    case 5 : $can = 'Ất'; break;
    case 6 : $can = 'Bính'; break;
    case 7 : $can = 'Đinh'; break;
    case 8 : $can = 'Mậu'; break;
    case 9 : $can = 'Kỷ'; break;
    default: $can = 'Canh'; break;
}
$chi = '';
switch($nam%12){
    case 1 : $chi = 'Dậu'; break;
    case 2 : $chi = 'Tuất'; break;
    case 3 : $chi = 'Hợi'; break;
    case 4 : $chi = 'Tí'; break;
    case 5 : $chi = 'Sửu'; break;
    case 6 : $chi = 'Dần'; break;
    case 7 : $chi = 'Mão'; break;
    case 8 : $chi = 'Thìn'; break;
    case 9 : $chi =  'Tị'; break;
    case 10 : $chi = 'Ngọ'; break;
    case 11 : $chi = 'Mùi'; break;
    default: $chi = 'Thân'; break;
}
echo "Năm $nam là năm $can $chi";



?>