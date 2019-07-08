<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // $kq = '';
    $arrPT = [
        '+' => 'Cộng',
        '-' => 'Trừ', 
        '*' => 'Nhân', 
        '/' => 'Chia', 
        '%' => 'Chia dư'
    ];
    if(isset($_POST['btnCalc'])){
        $a = $_POST['so_a'];
        if(!is_numeric($a)) $a = 'Error number a';
        
        $b = $_POST['so_b']; 
        if(!is_numeric($b)) $b = 'Error number b';
        
        if(is_numeric($a) && is_numeric($b)){
            $pt = $_POST['pheptinh'];
            if($pt=='+') $kq = $a+$b;
            elseif($pt=='-') $kq = $a-$b;
            elseif($pt=='*') $kq = $a*$b;
            elseif($pt=='/'){
                if($b==0) $kq = 'Math Error!';
                else $kq = $a/$b;
            }
            elseif($pt=='%'){
                if($b==0) $kq = 'Math Error!';
                else $kq = $a%$b;
            }
        }
    }
    
    ?>
    <form method="POST">
        <input type="text" name="so_a" placeholder="Enter number a" value="<?= isset($a) ? $a : '' ?>">
        <select name="pheptinh">
            <?php foreach($arrPT as $key => $pheptinh):?>
            <option value="<?=$key?>"
                <?=isset($pt) && $pt==$key ? 'selected' : ''?>
            ><?=$pheptinh?></option>
            <?php endforeach?>
        </select>
        <input type="text" name="so_b"
        value="<?php echo isset($b) ? $b : ''?>"
        placeholder="Enter number b">
        <input type="submit" value="Calc" name="btnCalc">
        <input type="text" placeholder="Result" disabled
        value="<?=isset($kq) ? $kq : ''?>">
    </form>
</body>
</html>