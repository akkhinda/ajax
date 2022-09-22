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
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="back">
  <div class="form">
        <form autocomplete="off">
            <div class="banner">
    <h2>Register</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="register">
      <div class="row">
      <label for="">Name</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br><br>
      <button type="button" onclick="submitData();">Register</button>
    </form>
    
    <br>
    </div><br>
    <a href="login.php">Go To Login</a>
    <?php require 'script.php'; ?>
    </div>
</div>

  </body>
</html>
