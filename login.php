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
    <title>Login</title>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="back">
  <div class="form">
        <form autocomplete="off">
            <div class="banner">
    <h2>Login</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" onclick="submitData();">Login</button><br>
    </form>
    <br><br>
    <a href="register.php">Go To Register</a>
    <?php require 'script.php'; ?>
    </div>
  </body>
</html>
