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
    <div class="box">
      <article class="media">
        <div class="media-left">
          <figure class="image is-128x128">
            <img src="../view/images/tier-icons/base-icons/challenger.png" alt="Image">
          </figure>
        </div>
        <div class="media-content">
          <div class="content">
            <p>
              <h4 class="title is-4"><?php echo $t['subject'];?></h4>
              <?php echo $t['content'];?>
            </p>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>


<?php
  include "footer.php"
?>
