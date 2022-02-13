<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    try{
        $fwriteobj=fopen("mydata.txt", "w");
        # if file not exists ---> it will create it --,
        var_dump($fwriteobj); # this file is ready to accept data to be written

        if($fwriteobj){
            $res=fwrite($fwriteobj, "Good morning");
            var_dump($res); # retrun length of charcters written in the file
            $res=fwrite($fwriteobj, "Have a good day ".PHP_EOL);
            fwrite($fwriteobj, "Test line ".PHP_EOL);
            fwrite($fwriteobj, "################Test data###############",10);

            fclose($fwriteobj);



        }

    }catch (Exception  $e){
        echo $e->getMessage();
    }
