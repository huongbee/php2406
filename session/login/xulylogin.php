<?php

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


/**
 * get username & password
 * find username & password in $listUser
 * 1. True: session login success -> go to home.php => Hello, name
 * 2. False: back to login.php & show error
 * 
 * Note: home.php
 * if not login: redirect to login.php & show message must login
 */

?>