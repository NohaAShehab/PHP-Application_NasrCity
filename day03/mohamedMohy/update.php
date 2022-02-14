<?php

    var_dump($_GET);

    $line_index= $_GET["id"];
    $newData=implode(":",[$_GET["username"],$_GET["password"],$_GET["email"]]);
    var_dump($newData);

    $file_data= file("info.txt");
    $file_data[(int)$line_index] = $newData;
    var_dump($file_data);

    $fileobj =fopen("info.txt","w");
    foreach ($file_data as $line){
        $line= str_replace(PHP_EOL,"",$line);
        fwrite($fileobj,$line.PHP_EOL);
    }
    header("Location:crudoper.php");
