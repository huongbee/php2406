<?php
$files = $_FILES['avatar'];

// print_r($files);
foreach($files['tmp_name'] as $key => $tmpName){

    $name = rand(). $files['name'][$key];
    $des = "images/$name";
    move_uploaded_file($tmpName, $des);
}

/**
 * - check each file size <= 200kb * 1024 => byte
 * - check each file type  allow: png | jpg | gif 
 * if file error => rollback
 * - rename file
 */

?>