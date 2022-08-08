<?php
  session_start();
  $username=$_POST['username'];
  $password=$_POST['password'];

  if(isset($_POST['username']) && $_POST['username'] == $username && $_POST['password'] == $password)
  {
    header("Location:watchlist.html");
  } else {

  }
?>
