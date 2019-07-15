<?php
session_start();
$listUser = [
    [
        'username'=>'admin',
        'password'=> md5('111111'),
        'name'=>'Nguyen Admin'
    ],
    [
        'username'=>'manager',
        'password'=> md5('222222'),
        'name'=> 'Le Van Manager'
    ],
    [
        'username'=>'guest',
        'password'=> md5('333333'),
        'name'=> 'Tran Thi A'
    ]
];


if(isset($_POST['btnLogin'])){
    if(!isset($_POST['username']) || $_POST['username']===''){
        $_SESSION['error'] = 'Missing username!';
        header('Location: index.php'); // redirect
        return;
    }
    if(!isset($_POST['password']) || $_POST['password']===''){
        $_SESSION['error'] = 'Missing password!';
        header('Location: index.php'); // redirect
        return;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $arrayUser = array_column($listUser,'password','username');
    if(!array_key_exists($username, $arrayUser)){
        $_SESSION['error'] = 'Can not find user!';
        header('Location: index.php'); // redirect
        return;
    }
    if($arrayUser[$username] != md5($password)){
        $_SESSION['error'] = 'Password invalid!';
        header('Location: index.php'); // redirect
        return;
    }
    print_r($arrayUser);
    echo 'login thanh cong';

}

/**
 * get username & password
 * find username & password in $listUser
 * 1. True: session login success -> go to home.php => Hello, name
 * 2. False: back to index.php & show error
 * 
 * Note: home.php
 * if not login: redirect to index.php & show message must login
 */

?>