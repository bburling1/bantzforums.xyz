<?php
//start session management
session_start();
//connect to the database
require('../model/database.php');

include "header.php"
?>

<div id="content">
  <?php
    //user messages
    if(isset($_SESSION['error'])) //if session error is set
    {
      echo '<div class="error">';
      echo '<p>' . $_SESSION['error'] . '</p>'; //display error message
      echo '</div>';
      unset($_SESSION['error']); //unset session error
    }
  ?>
  <form class="register" action="../controller/registration_process.php" method="post">
      <h2 class="form-title">Register to League of Forums</h2>
      <label><b>Username*</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
      <label><b>Email*</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
      <label><b>Password*</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <label><b>Confirm Password*</b></label>
      <input type="password" placeholder="Confirm your Password" name="pass_confirm" required>
      <p>Have an account? <a onclick="showmodal()">Login</a> here!</p>
      <button class="form-submit" type="submit">Register</button>
  </form>
</div>

<?php
include "footer.php"
?>
