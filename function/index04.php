<?php
/**
 * Cho n = 100,
 * In ra dãy các số nguyên tố từ 0 -> n
 * 
 * B1: viet function kiem tra so a phai la so ngto
 * B2: dung vong lap in day so
 */
function kiemtraSNT($a){
    if($a == 0 || $a == 1) return false;
    for($i=2; $i<=sqrt($a); $i++){
        if($a%$i == 0) return false;
    }
    return true;
}
// var_dump(kiemtraSNT(6));
?>