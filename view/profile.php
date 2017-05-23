<?php
  //connect to the database
  require('../model/database.php');
  //retrieve functions
  require('../model/functions_users.php');
  require('../model/functions_threads.php');

  $title = "Your Profile";

  include "header.php";
  $user = is_user_logged_in();
?>
<section class="hero is-primary is-medium">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        <?php echo $_SESSION['user']; ?>
      </h1>
      <h2 class="subtitle">
        Your Profile
      </h2>
    </div>
  </div>

</section>
<div class="container">
  <?php $message = user_message(); ?>
</div>
<div id="tabs">
  <div class="tabs is-centered">
    <ul>
      <li class="is-active"><a href="#tabs-1">Overview</a></li>
      <li><a href="profile/activity.php">Recent Activity</a></li>
      <li><a>Your League Stats</a></li>
      <li><a>Settings</a></li>
    </ul>
  </div>
  <div id="tabs-1">
    <?php include "profile/overview.php"; ?>
  </div>
</div>


<?php
  include "footer.php"
?>
