<?php
require 'config.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $password = $_POST["password"];
 
  $query = "INSERT INTO data_login VALUES('', '$name', '$password')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
    <div class="login">
      <form class="form" action="" method="post" autocomplete="off">
        <input type="text" name="name" required value="">
        <br>
        <br>
        <input type="password" name="password" required value="">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>