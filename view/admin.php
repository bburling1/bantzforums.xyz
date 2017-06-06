<?php
//connect to the database
require('../model/database.php');

$title = "Home";

include "header.php";
$permissions = is_user_admin();
?>

<section class="section">
  <div class="container">
    <h3 class="title is-3">Search for Users</h3>
    <form>
      <input type="text" size="30" onkeyup="showResult(this.value)">
      <div id="usersearch"></div>
    </form>
  </div>

</section>

<?php
include "footer.php";
?>
