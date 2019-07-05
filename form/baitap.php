<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="number" name="so_a" placeholder="Enter number a" value="<?=$_GET['so_a']?>">
        <select name="pheptinh">
            <option value="+">+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>%</option>
        </select>
        <input type="number" placeholder="Enter number b">
        <input type="submit" value="Calc">
        <input type="number" placeholder="Result" disabled value="<?=5?>">
    </form>
</body>
</html>