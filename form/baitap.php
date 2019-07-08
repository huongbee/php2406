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
    if(isset($_POST['btnCalc'])){
        $a = $_POST['so_a'];
        $b = $_POST['so_b'];
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
    
    ?>
    <form method="POST">
        <input type="number" name="so_a" placeholder="Enter number a" value="<?= isset($a) ? $a : '' ?>">
        <select name="pheptinh">
            <option value="+"
                <?=isset($pt) && $pt=='+' ? 'selected' : '' ?>
            >Cộng</option>
            <option value="-"
                <?=isset($pt) && $pt=='-' ? 'selected' : '' ?>
            >Trừ</option>
            <option value="*"
                <?=isset($pt) && $pt=='*' ? 'selected' : '' ?>
            >Nhân</option>
            <option value="/"
                <?=isset($pt) && $pt=='/' ? 'selected' : '' ?>
            >Chia</option>
            <option value="%"
                <?=isset($pt) && $pt=='%' ? 'selected' : '' ?>
            >Chia dư</option>
        </select>
        <input type="number" name="so_b"
        value="<?php echo isset($b) ? $b : ''?>"
        placeholder="Enter number b">
        <input type="submit" value="Calc" name="btnCalc">
        <input type="text" placeholder="Result" disabled
        value="<?=isset($kq) ? $kq : ''?>">
    </form>
</body>
</html>