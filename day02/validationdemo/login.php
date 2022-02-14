


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="sucess.php" method="get">
  <pre>
    <label> Name </label>
    <input type="text" name="username"
        value="<?php if(isset($_REQUEST['old_username'])){
            echo $_REQUEST['old_username'];} else echo""; ?>">

      <label style="color: red">
        <?php if(isset($_GET["username"])){echo "username required";} ?>
      </label>
  </pre>
    <pre>
    <label> Password </label>
    <input type="password" name="password"
           value="<?php if(isset($_REQUEST['old_password'])){
               echo $_REQUEST['old_password'];}?>">

    <label style="color: red">
      <?php if(isset($_GET["password"])){echo "password required";} ?>
    </label>
  </pre>

    <input type="submit" >
</form>
</body>
</html>