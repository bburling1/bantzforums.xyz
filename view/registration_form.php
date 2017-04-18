<?php
//connect to the database
require('../model/database.php');

include "header.php"
?>

<div id="content">
  <form class="register" action="">
      <h2 class="form-title">Register to League of Forums</h2>
      <div class="form-input">
          <label><b>Username*</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
          <label><b>Email*</b></label>
          <input type="email" placeholder="Enter Email" name="email" required>
          <label><b>Password*</b></label>
          <input type="password" placeholder="Enter Password" name="pass" required>
          <label><b>Confirm Password*</b></label>
          <input type="password" placeholder="Confirm your Password" name="pass_confirm" required>
          <p>Have an account? <a onclick="showmodal()">Login</a> here!</p>
          <button class="form-submit" type="submit">Register</button>
      </div>
  </form>
</div>

<?php
include "footer.php"
?>
