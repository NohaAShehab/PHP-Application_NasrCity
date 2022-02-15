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
    $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE,3306);

//    var_dump($conn);
    if ($conn->connect_errno) {
        trigger_error($conn->connect_error);
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }
    if($conn){
            ################### insert
//        $query ="insert into `application`.`students` (`std_name`,`email`)
//                    values('mohamed', 'mohamed@iti.gov')";
//
//        var_dump($query);
//        $res=$conn->query($query);  # true or false
//        var_dump($res);
////        var_dump($conn);
//        $inserted_id=$conn->insert_id;
//        var_dump($inserted_id);

        ######################## select
        $select_query= "select * from students";
        $res= $conn->query($select_query);
//        var_dump($res);
//        var_dump($conn);

        # fetch all
//        $data = $res->fetch_all(MYSQLI_ASSOC);
//        var_dump($data);


        echo "<table border='3'> <th>Id</th> <th>Name</th> <th>Email</th>";
//        while ($record = $res->fetch_assoc()){  # retrun record as associtave array
//            echo "<tr><td>".$record["s_id"]."</td> <td>".$record["std_name"]."</td><td>".$record["email"].
//                "</td></tr>";
//        }

//        while ($record = $res->fetch_object()){  # retrun record as an object
//            echo "<tr><td>".$record->s_id."</td> <td>".$record->std_name."</td><td>".$record->email.
//                "</td></tr>";
//        }
//        echo "</table>";

//        $row = $res->fetch_row();
//        var_dump($row);
//        echo $res->num_rows;
//
//        $res->free_result();

//        ##################3 update ###############3
//        $up_query= "update students set std_name='Sara' where s_id=4";
//        $res = $conn->query($up_query);
//        var_dump($res);
//        var_dump($conn);
//        $affected= $conn->affected_rows;
//        if( $affected> 0){
//            echo "row updated successfully";
//        }

        ###################### delete
//        $up_query= "delete from students where s_id=4";
//        $res = $conn->query($up_query);
//        var_dump($res);
//        var_dump($conn);
//        $affected= $conn->affected_rows;
//        if( $affected> 0){
//            echo "row deleted successfully";
//        }


        ############################# prepared statment
        $inst_temp="INSERT into students(std_name, email) values(?,?)";
        $stmt=$conn->prepare($inst_temp);
        var_dump($stmt);
        $name="prepared2";
        $email="prepared2";
        $stmt->bind_param("ss",$name,$email);
        $res=$stmt->execute();
        $stmt->bind_param("ss",$name,$email);
        $res=$stmt->execute();
//        var_dump($res);



        $conn->close();
    }

}catch (Exception $e){
}