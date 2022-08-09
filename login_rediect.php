<?php
  $username = $_POST['username'];
  $passsword = $_POST['password'];

  $result = $mysqli->query("SELECT * FROM gojoanimelogin WHERE username = '$username'");
  $result2 = $mysqli->query("SELECT * FROM gojoanimelogin WHERE loginpasswd = '$password'");

  if(isset($_POST['username']) && $_POST['username'] == $result && $_POST['password'] == $result2)
  {
    header("Location:watchlist.php");
  } else {

  }
?>
