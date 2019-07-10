<?php
$name = $_POST['txtName']; // string

$file = $_FILES['avatar']; // array

$des = 'images/a.png';
move_uploaded_file($file['tmp_name'], $des);
echo 'success';




// print_r($file);
/**
 * - check file type
 * - check file size
 * - rename file
 */

?>