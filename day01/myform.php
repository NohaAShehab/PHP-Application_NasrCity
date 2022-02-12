<?php

    echo "<h1 style='color: purple'> Thank you for submitting this data</h1>";

    # now you are sending request to the server

    # $_REQUEST ---> super global array

    var_dump($_REQUEST);

    var_dump($_POST);

    var_dump($_GET);

    echo '<br> ------------------------ </br>';

    echo $_REQUEST;


    echo '<br> ------------------------ </br>';


    echo "Good morning".$_REQUEST["username"];

//    "Noha"
//
//    'Noha' # literal

