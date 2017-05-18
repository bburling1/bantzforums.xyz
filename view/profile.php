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
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="is-active"><a>Overview</a></li>
          <li><a>Recent Activity</a></li>
          <li><a>Your LoL Account</a></li>
          <li><a>Settings</a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
<div class="container">
  <?php $message = user_message(); ?>
</div>
<?php include "profile/overview.php"; ?>


<?php
  include "footer.php"
?>
