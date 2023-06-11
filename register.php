<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/register.css">
  </head>
  <body>
    <div class="container">
    <h2>Register</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="register">
      <label for="">Name</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br>
      <label for="">Contact</label>
      <input type="text" id="contact" value=""> <br>
      <label for="">DOB</label>
      <input type="text" id="dob" value=""> <br>
      <label for="">Age</label>
      <input type="text" id="age" value=""> <br>
      <label for="">Place</label>
      <input type="text" id="place" value=""> <br>
      <button type="button" onclick="submitData();">Register</button>
    </form>
    <br>
    <a href="login.php">Go To Login</a>
    </div>
    <?php require 'script.php'; ?>
  </body>
</html>