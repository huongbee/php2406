<?php
$name = $_POST['txtName']; // string

$file = $_FILES['avatar']; // array
// print_r($file);
// die;

if($file['size'] <= 2048000){
    $arrExt = [
        'image/png',
        'image/jpeg',
        'image/gif'
    ];
    if(in_array($file['type'], $arrExt)){
        $fileName = rand(100000, 999999).'-'.time().'-'.$file['name'];
        $des = "images/$fileName";
        move_uploaded_file($file['tmp_name'], $des);
        echo 'success';
    }
    else{
        die('File not allow!');
    }
}
else{
    die('File too large!');
}





// print_r($file);
/**
 * - check file size <= 200kb * 1024 => byte
 * - check file type  allow: png | jpg | gif | icon
 * - rename file
 */

?>