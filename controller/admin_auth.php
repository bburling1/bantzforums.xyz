<?php
  if(isset($_SESSION['user'])){
    if($_SESSION['permissions'] == "admin"){
      //redirect to homepage if user isn't an admin
      header("location:../index.php");
      //set error message
      $_SESSION['error'] = "You do not have the required permissions to access this page";
    }
  }
?>
