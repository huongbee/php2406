<?php

// print_r($_GET);
// echo $_GET['txtName'];
// print_r($_POST);
// .php?txtName=name
// &
// password=asd
// &
// confirm_password=1234

$password = $_POST['password'];
$repassword = $_POST['confirm_password'];
if(strlen($password)<6) die('Password min 6 characters!');
if($password != $repassword){
    die('Error! RePassword must match!');
}
echo $_POST['txtName'];
?>
