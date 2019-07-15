<?php
session_start();
?>
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
    require_once 'users.php';
    $username = $_SESSION['user'];
    $users = array_column($listUser, 'name', 'username');
    $fullname = $users[$username];
    
    ?>
    <p>Hello, <?=$fullname?> </p>
</body>
</html>