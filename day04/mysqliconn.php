<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    # set creditionals

define("DB_HOST", "localhost");
define("DB_USER", "app42");
define("DB_PASSWORD", "Iti123456789_");
define("DB_DATABASE", "application");

try{

    # connect to the databse
    $conn=mysqli_connect(DB_HOST,
        DB_USER,DB_PASSWORD,DB_DATABASE,3306);

    var_dump($conn);

    if (mysqli_connect_errno()) {
        trigger_error(mysqli_connect_error());
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if($conn){
        echo "<h1> Connected successfully </h1>";
        ###### create table
//        $query= "create table `students` (`s_id` serial primary key,`std_name` varchar(20),`email` varchar(40))";

        # send query to the database  # hit database
//        $res =mysqli_query($conn,$query);  # true or false
//        var_dump($res);
        ##################################insert #################################
//        $query ="insert into `application`.`students` (`std_name`,`email`)
//                    values('Ahmed', 'ahmed@iti.gov')";
//        $res=mysqli_query($conn, $query);  # true or false
//        var_dump($res);
////        var_dump($conn);
//        $inserted_id=mysqli_insert_id($conn);
//        var_dump($inserted_id);
        ##################################select #################################
        $select_query= "select * from students";
        $res= mysqli_query($conn,$select_query); # depend on the query , # mysqli_result
//         echo mysqli_num_rows($res);
//        var_dump($res);
//        var_dump($conn);
//
////        $data=mysqli_fetch_all($res,MYSQLI_ASSOC);  #return each record in form of associative array
////        var_dump($data);
////
////        $data=mysqli_fetch_all($res,MYSQLI_ASSOC);  #return each record in form of associative array
////        var_dump($data);
//
//        $record = mysqli_fetch_assoc($res);
//        var_dump($record);
//
//
        echo "<table border='3'> <th>Id</th> <th>Name</th> <th>Email</th>";
//        while ($record = mysqli_fetch_assoc($res)){  # retrun record as associtave array
//            echo "<tr><td>".$record["s_id"]."</td> <td>".$record["std_name"]."</td><td>".$record["email"].
//                "</td></tr>";
//        }

        while ($record = mysqli_fetch_object($res)){  # retrun record as an object
            echo "<tr><td>".$record->s_id."</td> <td>".$record->std_name."</td><td>".$record->email.
                "</td></tr>";
        }
        echo "</table>";
        mysqli_free_result($res);

//        ###########################update
//        $up_query= "update students set std_name='omar' where s_id=3";
//        $res = mysqli_query($conn,$up_query);
//        var_dump($res);
//        var_dump($conn);
//        $affected= mysqli_affected_rows($conn);
//        if( $affected> 0){
//            echo "row updated successfully";
//        }

        ###########################delete
//        $up_query= "delete from students where s_id=3";
//        $res = mysqli_query($conn,$up_query);
//        var_dump($res);
//        var_dump($conn);
//        $affected= mysqli_affected_rows($conn);
//        if( $affected> 0){
//            echo "row deleted successfully";
//        }

        mysqli_close($conn);

    }

}
catch (Exception $e){
    echo $e->getMessage();
}

