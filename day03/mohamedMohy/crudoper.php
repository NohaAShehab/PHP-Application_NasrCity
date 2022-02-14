<?php

$data=file("info.txt");
var_dump($data);

echo "<table border='1'> <tr>
    <th>username</th>
    <th>password</th>
    <th>email</th>
     <th>edit</th>
      <th>delete</th>
</tr>";
foreach ($data as $id=>$line){
        $line_data = explode(":", $line);
        echo "<tr>";
        foreach ($line_data as $field) {
            echo "<td>" . $field . "</td>";
        }
        echo "<td> <a href='edit.php?id=" . $id . "'> Edit</a> </td>";
        echo "<td> <a href='delete.php?id=" . $id . "'> Delete</a> </td>";
}
echo "</table>";