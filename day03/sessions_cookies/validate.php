<?php

session_start();  # if the session exsits --> I will use it
var_dump($_REQUEST);
# read the information
var_dump($_SESSION);

if ($_SESSION["user_name"]==$_REQUEST["username"]
    && $_REQUEST["password"]==$_SESSION["password"]){

    echo "You visited this website before";
}else{
    header("Location:login.php");
}
