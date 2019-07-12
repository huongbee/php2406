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
    echo $username = $_POST['username'];

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