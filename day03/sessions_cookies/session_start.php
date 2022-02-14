<?php

    #The first time you call the website --> server needs to save info about client (at server)
    # 1- start session
    session_start();  # per browser
    # if session not found # generate session_id --> and create file on server sess_generated_session
    echo "<h1> Good morning </h1>";
    if($_COOKIE["PHPSESSID"]) {
        setcookie("PHPSESSID",$_COOKIE["PHPSESSID"],time()+5,"/","",0);
    }
    # file is ready to save information
    $_SESSION["username"]="Yasmin";
    $_SESSION["company"]="iti";

