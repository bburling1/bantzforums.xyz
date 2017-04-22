<?php
//start session management
session_start();
//connect to the database
require('../model/database.php');
require('../model/functions_categories.php');
require('../model/functions_threads.php');
require('../model/functions_users.php');


include "header.php"
?>

<div class="container content">
<section class="section">
    <?php $result = get_category();?>
    <h2 id="categoriestitle">Threads from <?php echo $result['cat_name'];?></h2>
    <?php

    //call the get_categories() function
    $result = get_threads_by_category();

    ?>
    <div class="box">
      <div class="column is-gapless">
      <?php foreach($result as $row):?>
        <div class="columns box">
          <div class="column">
              <h3><a href='#'><?php echo $row['subject'];?></a></h3>
              <p><?php echo $row['created'];?> by <?php $user_id = $row['user_id']; $username = get_username_by_user_id($user_id); echo $username[0];?></p>
          </div>
          <div class="column is-one-quarter">
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>

<?php
include "footer.php"
?>
