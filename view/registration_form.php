<?php
//start session management
session_start();
//connect to the database
require('../model/database.php');

include "header.php"
?>

<section class="section">
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
<div class="container content">
  <form class="form register" onsubmit="return confirm_password()" action="../controller/registration_process.php" method="post">
    <h2 class="form-title">Register to League of Forums</h2>
    <div class="field">
      <label class="label"><b>Username*</b></label>
      <p class="control">
        <input class="input" type="text" placeholder="Enter Username" name="username" required>
      </p>
    </div>
    <div class="field">
      <label class="label"><b>Email*</b></label>
      <p class="control">
        <input class="input" type="email" placeholder="Enter Email" name="email" required>
      </p>
    </div>
    <div class="field">
      <label class="label"><b>Password*</b></label>
      <p class="control">
        <input id="password" class="input" type="password" placeholder="Enter Password" name="password" required>
      </p>
    </div>
    <div class="field">
      <label class="label"><b>Confirm Password*</b></label>
      <p class="control">
        <input id="password_confirm" class="input" type="password" placeholder="Confirm your Password" name="password_confirm" required>
      </p>
    </div>
    <p>Have an account? <a onclick="showloginmodal()">Login</a> here!</p>
    <p id="registernotification" class="help is-danger"></p>
    <div class="field">
      <p class="control">
        <button class="button is-primary" type="submit">Register</button>
      </p>
    </div>
  </form>
</div>
</section>

<?php
include "footer.php"
?>
