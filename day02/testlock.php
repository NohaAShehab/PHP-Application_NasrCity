<?php


    $obj=fopen("mylock.txt","r+");
    var_dump($obj);

    var_dump(fread($obj,filesize("mylock.txt")));
    fwrite($obj,"oooooooooooooooooooo");