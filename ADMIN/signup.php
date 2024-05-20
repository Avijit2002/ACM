<?php
  require '../ADMIN/_dbconnect.php';

  // use this file to create username and password and give access of admin portal to user

  $name = ucfirst(trim("avijit ram"));
  $username = "";   // write username here
  $password = "";   // write password here   and remember it because there is no way to recover.... be responsible lolas !!!

  $hash = password_hash($password,PASSWORD_DEFAULT);
  
  $sql = "INSERT INTO `admin_members` ( `name`,`username`, `hash`) VALUES ('$name','$username', '$hash')";
  mysqli_query($conn, $sql);

?> 