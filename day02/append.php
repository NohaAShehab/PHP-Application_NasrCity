<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $fwriteobj = fopen("append.txt", "a");

    if ($fwriteobj){
        fputs($fwriteobj, "My first line".PHP_EOL);
        fwrite($fwriteobj, "Test string".PHP_EOL);

        fclose($fwriteobj);
    }

}catch (Exception $e){
    echo $e->getMessage();
}