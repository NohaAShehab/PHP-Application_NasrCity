<?php

    var_dump($_REQUEST);
    $errors =[];
    $old = [];
    if(isset($_REQUEST["username"])&& empty($_REQUEST["username"])&& $_REQUEST["username"]==""){

        $errors['username']="useranme_is_empty";
    }else{
        $old["old_username"]=$_REQUEST["username"];
    }
    if(empty($_REQUEST["password"]) ||$_REQUEST["password"]==""){
        $errors["password"]="password_is_empty";
    }
    else{
        $old["old_password"]=$_REQUEST["password"];
    }

   var_dump($errors);
    # construct querystring
    $str="login.php?";
    if(count($errors)>0){
        foreach ($errors as $k=>$val){
            $str.=$k."=".$val."&";
        }
        if(count($old)>0){
            foreach ($old as $o=>$v){
                $str.=$o."=".$v."&";
            }
        }
        header("Location:".$str);
    }
//    var_dump($str);