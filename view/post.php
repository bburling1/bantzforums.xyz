<?php
  //connect to the database
  require('../model/database.php');
  require('../model/functions_categories.php');
  require('../model/functions_threads.php');
  require('../model/functions_users.php');


  include "header.php";
  $t = get_thread();

?>

<section class="section">
  <div class="container">
    <div class="box" id="threadbox">
      <article class="media">
        <div class="media-left">
          <h6 class="subtitle has-text-centered"><strong><?php $user_id = $t['user_id']; $username = get_username_by_user_id($user_id); echo $username[0];?></strong></h6>
          <figure class="image is-128x128">
            <img src="../view/images/tier-icons/base-icons/challenger.png" alt="Image">
          </figure>
        </div>
        <div class="media-content">
          <div class="content box">
              <p><h4 class="title is-4"><?php echo $t['subject'];?></h4><?php echo $t['content'];?></p>
          </div>
        </div>
      </article>
    </div>
    <?php
    $result = get_replies_by_thread();
    foreach($result as $row):
      ?>
      <div class="box" id="threadbox">
        <article class="media">
          <div class="media-left">
            <h6 class="subtitle has-text-centered"><strong><?php $user_id = $row['user_id']; $username = get_username_by_user_id($user_id); echo $username[0];?></strong></h6>
            <figure class="image is-128x128">
              <img src="../view/images/tier-icons/base-icons/bronze.png" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content box">
              <p>
                <?php echo $row['content'];?>
              </p>
            </div>
          </div>
        </article>
      </div>
    <?php endforeach; ?>
  </div>
</section>


<?php
  include "footer.php"
?>
