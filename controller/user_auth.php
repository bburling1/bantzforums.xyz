<?php

  if(!isset($_SESSION['user'])){
    //redirect to homepage is user isn't logged in
    header("location:../view/categories.php");
    //set error message
    $_SESSION['error'] = "Please log in to access this page";
  }
?>
