<?php
 //Written By: Jason Fong 
 include ("connect.php");
  
 if(isset($_POST['Login'])) {
   $sql->mysqli_query($conn, "SELECT * FROM gojoanimelogin WHERE username = '".$_POST["username"]."' AND loginpasswd = '".$_POST["password"]."' ");

   $num = mysqli_num_rows($sql);

   if($num > 0){
       $row = mysqli_fetch_array($sql);
       header("Location:watchlist.php");
       exit();
   } else {
       echo '<script>';
       echo "alert(\"Invalid Username and Password, Please try again\");";
       echo '</script>';
   }

 }
?>
