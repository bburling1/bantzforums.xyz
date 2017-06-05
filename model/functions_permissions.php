<?php
  function is_user_admin(){
    if(!isset($_SESSION['user'])){
      header('location:../index.php');
      exit();
    } elseif($_SESSION['permissions'] != 'admin') {
      //redirect to homepage if user isn't an admin
      header("location:../index.php");
      //set error message
      $_SESSION['error'] = "You do not have the required permissions to access this page";
      exit();
    }
  }

  function is_user_logged_in(){
    if(!isset($_SESSION['user'])){
      //redirect to homepage is user isn't logged in
      header("location:../view/categories.php");
      //set error message
      $_SESSION['error'] = "Please log in to access this page";
    }
  }

  function is_user_owner()
  {
    $thread = get_thread();
    if($_SESSION['user_id'] != $thread['user_id']){
      header("location:../view/categories.php");
      $_SESSION['error'] = "You don't have permission to access this page";
    }
  }
 ?>
