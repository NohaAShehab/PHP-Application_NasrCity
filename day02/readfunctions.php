<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $fileobj = fopen("application42.txt", "r");

    #
    # fgets 0--> read line form the file
//    $data =fgets($fileobj);
//    var_dump($data);
//    $data =fgets($fileobj);
//    var_dump($data);
//    $data =fgets($fileobj);
//    var_dump($data);

    # read line form file, lenght of the line max 4
    # shoud be 4, and the rest byte --> new line
//    $data = fgets($fileobj,5);
//    var_dump($data);
//    $data = fgets($fileobj,5);
//    var_dump($data);
//    $data = fgets($fileobj,5);
//    var_dump($data);
//    $data = fgets($fileobj,5);
//    var_dump($data);
//
//    while (!feof($fileobj)){
//        $line = fgets($fileobj);
//        var_dump($line);
//    }
////    fclose($fileobj);
////    $fileobj = fopen("application42.txt","r");
//    # move the file pointer to the specified byte
//    fseek($fileobj, 20);
//    $data = fread($fileobj,
//        filesize("application42.txt"));
//    var_dump($data);

    ##### fgetcvs
//    $data = fgetcsv($fileobj,"3");  # read line of the file
//    # into an array
//    var_dump($data);
//    $data = fgetcsv($fileobj,"3");  # read line of the file
//    # into an array
//    var_dump($data);
//
//    $data = fgetcsv($fileobj);  # read line of the file
//    # into an array
//    var_dump($data);
//
//    $data = fgetcsv($fileobj);  # read line of the file
//    # into an array
//    var_dump($data);
//
//    # read line into an array ---> specify line len, sep.
//    while (!feof($fileobj)){
//        echo "-------------------------";
////        var_dump(fgetcsv($fileobj)); # read line --> in array
//        var_dump(fgetcsv($fileobj,100," ")); # read line --> in array
//
//    }


}catch(Exception $e) {
    echo $e->getMessage();
}