<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try{
//        # readfile, opened the file, get its content
//        $data=readfile("application42.txt");
//        var_dump($data);

    # read file conent into one array, line by line
//    $lines = file("application42.txt");
//    var_dump($lines);
//    $lines = file("/etc/passwd");
//    var_dump($lines);

//    $mydata = file_get_contents("application42.txt");
//    var_dump($mydata);

//    $fileobj=fopen("application42.txt", "r");
//
//
//    $line = fgetcsv($fileobj);
//    var_dump($line);
//    $line = fgetcsv($fileobj);
//    var_dump($line);
//
////    rewind($fileobj);
//    fseek($fileobj,10);
//    $line = fgetcsv($fileobj);
//    var_dump($line);

    var_dump(filetype("application42.txt"));
    var_dump(filetype("test"));
    var_dump(file_exists("test"));
    # remove file from the server
    unlink("mydata.txt");










}catch (Exception $e){
    echo $e->getMessage();
}