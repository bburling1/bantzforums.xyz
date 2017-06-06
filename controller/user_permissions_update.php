<?php
//connect to the database
require('../model/database.php');
require('../model/functions_users.php');

$user_id = $_GET['user_id'];
$permissions = $_POST['permissions'];

$result = update_user_permissions($user_id, $permissions);

if($result){
  header("location:../view/admin_usercontrol.php?user_id=$user_id");
  $_SESSION['success'] = "User successfully updated";
} else {
  header("location:../view/admin_usercontrol.php?user_id=$user_id");
  $_SESSION['error'] = "There was an error updating the user permissions";
}
?>
