<?php

    var_dump($_GET["id"]);
    $id= $_GET["id"];
    $data = file("info.txt");

    $line= $data[(int)$id];
    $line = explode(":",$line);
    var_dump($line);

    ?>
<form action="update.php" method="get">
    <label> Name </label>
    <input type="text" name="username" value="<?php echo $line[0];?>">
    <label> Password </label>
    <input type="text"  name="password" value="<?php echo $line[1];?>">
    <label> Email </label>
    <input type="text" name="email" value="<?php echo $line[2];?>">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit">
</form>
