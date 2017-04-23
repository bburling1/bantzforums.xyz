<?php
//connect to the database
require('../model/database.php');
require('../model/functions_categories.php');


include "header.php"
?>

<div class="container content">
<section class="section">
    <h2>Forum Categories:</h2>
    <?php

    //call the get_categories() function
    $result = get_categories();

    ?>
    <div class="box">
      <div class="column is-gapless">
      <?php foreach($result as $row):?>
        <div class="columns box">
          <div class="column">
              <h3><a href='threads.php?cat_id=<?php echo $row['cat_id'];?>'><?php echo $row['cat_name'];?></a></h3>
              <p><?php echo $row['cat_description'];?></p>
          </div>
          <div class="field is-grouped column is-one-quarter">
              <p class="level-item control">
                <a class="button" href="../view/category_update_form.php?cat_id=<?php echo $row['cat_id'];?>">
                  Update
                </a>
              </p>
              <p class="level-item control">
                <a class="button is-danger">
                  Delete post
                </a>
              </p>
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
