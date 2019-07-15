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
    if(!isset($_SESSION['user'])){
        //check cookie
        if(!isset($_COOKIE['user'])){
            $_SESSION['error'] = 'Plz login first!';
            header('Location: index.php'); // redirect
            return;
        }
    }
    // $username = isset($_SESSION['user']) ? $_SESSION['user'] : $_COOKIE['user'];
    if(isset($_SESSION['user'])){
        $username = $_SESSION['user'];
        echo 'login by session';
    }
    elseif(isset($_COOKIE['user'])){
        $username = $_COOKIE['user'];
        // $_SESSION['user'] = $_COOKIE['user']; // duy tri qua trinh lam viec
        setcookie('user',$username, time()+120); // gia han them cho cookie
        echo 'login by cookie';
    }
    $users = array_column($listUser, 'name', 'username');
    if(!isset($users[$username])){
        $_SESSION['error'] = 'Can not find user!';
        header('Location: index.php'); // redirect
        return;
    }
    $fullname = $users[$username];
    
    ?>
    <p>Hello, <?=$fullname?> </p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>