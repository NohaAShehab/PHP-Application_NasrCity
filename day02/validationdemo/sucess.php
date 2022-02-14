<?php

    var_dump($_REQUEST);
    $errors =[];
    $old = [];
    if(empty($_REQUEST["username"])){
        $errors['username']="useranme_is_empty";
    }else{
        $old["old_username"]=$_REQUEST["username"];
    }

    if(empty($_REQUEST["password"])){
        $errors["password"]="password_is_empty";
    }
    else{
        $old["old_password"]=$_REQUEST["password"];
    }

   var_dump($errors);
    var_dump($old);

    # construct querystring
    #pagename?name=fff&kjjkfh
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
