<?php
$files = $_FILES['avatar'];

// print_r($files);
// die;
//check file size
foreach($files['size'] as $key => $size){
    if($size > 200*1024){
        die('File '.$files['name'][$key].' too large!');
    }
}
$arrExt = [
    'image/png',
    'image/jpeg',
    'image/gif'
];
foreach($files['type'] as $key => $fileType){
    if(!in_array($fileType, $arrExt)){
        die('File '.$files['name'][$key].' not allow!');
    }
}

foreach($files['tmp_name'] as $key => $tmpName){
    $name = rand().'-'. $files['name'][$key];
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