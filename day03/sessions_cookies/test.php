<?php
    session_start();
    var_dump($_SESSION);
    $_SESSION["chrome"]=true;


    # remove variabls from session
    unset($_SESSION["username"]);

    # destory session
    # logout --> don't track
    session_destroy();  # remove session file only
    setcookie("PHPSESSID","",time()-3600,"/","",0);