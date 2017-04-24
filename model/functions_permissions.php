<?php
  //create a function to determine if the user is an admin
  function user_is_admin(){
    //if user is logged in
    if(isset($_SESSION['user'])){
      //if user is an admin
      if($_SESSION['permissions'] == "user"){
        //redirect to homepage if user isn't an admin
        header("location:../index.php");
        //set error message
        $_SESSION['error'] = "You do not have the required permissions to access this page";
      }
    }
  }

  //create a function to determine if a user is logged in
  function user_is_logged_in(){
    //if user is logged in
    if(!isset($_SESSION['user'])){
      //redirect to homepage is user isn't logged in
      header("location:../index.php");
      //set error message
      $_SESSION['error'] = "Please log in to access this page";
    }
  }
?>
