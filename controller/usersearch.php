<?php
  //start session management
  session_start();
  //connect to the database
  require('../model/database.php');
  //retrieve the functions
  require('../model/functions_users.php');

  $q = $_GET['q'];

  if(strlen($q)>0){
    $result = admin_get_users($q);
    print(json_encode($result));


  }

?>
