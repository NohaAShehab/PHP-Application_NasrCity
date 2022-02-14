<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
//    var_dump($_REQUEST);
    var_dump($_GET);
    var_dump($_POST);
try {


    var_dump($_FILES); # info about file
    $file_info = $_FILES["img"];
    $file_name = $file_info["name"];
    $file_tmp_name = $file_info["tmp_name"];
    $file_size = $file_info["size"];
//    var_dump($file_info);
//    extract($file_info);
//    var_dump($name);
    $file = "cat ".$file_tmp_name;
    var_dump(`$file`);

//    $res = move_uploaded_file($file_tmp_name, "images/" . $file_name);
//    var_dump($res);
}catch (Exception $e){
    $e->getMessage();
}