<?php


$data=file("stdinfo.txt");
var_dump($data);
# explode
echo "<table border='2'> <tr><th> Name</th>
    <th> Track</th>
    <th> Course</th>
    <th> Intake</th>
     <th> Edit</th>
     <th> Delete </th>
    </tr>";
foreach($data as $line){
        $info= explode(":",$line);
        echo "<tr>";
        foreach ($info as $item){
            echo "<td>".$item."</td>";
        }
        echo "<td><a href='editline.php?item=$line'> Edit</a></td>";
        echo "<td><a href=''> Delete</a></td>";
        echo "</tr>";
}

#json_encode;
#json_decode;
echo "</table>";