<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    try {
        # read from file
        $fileresource = fopen("application42.txt", "r");
        var_dump($fileresource);

        if ($fileresource) {
            # get file size
            $fsize = filesize("application42.txt"); # return file size in bytes
            var_dump($fsize);
            $file_data = fread($fileresource, $fsize);
            var_dump($file_data);  # return the file content into string object


            # close file
            fclose($fileresource);

        }
    }catch (Exception $e){  # $e---> exception object
        echo $e->getMessage();  # call get message in the exception
    }






