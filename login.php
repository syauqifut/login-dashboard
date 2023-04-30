<?php

  session_start();
  require 'config/database.php';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="padding-top:180px;">
  <h1>Login</h1>

  <form action="controller/login.php" method="POST">
    <input name="email" type="text" placeholder="Enter your email">
    <input name="password" type="password" placeholder="Enter your Password">
    <input type="submit" value="Submit">
  </form>
</body>

</html>