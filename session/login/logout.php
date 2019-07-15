<?php
session_start();
session_destroy(); // clear all session
setcookie('user',null, time() - 120); // remove cookie
// time(): now
// 0
// -1

header('Location: index.php');



?>