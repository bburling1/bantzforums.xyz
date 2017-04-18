<?php
//start session management
session_start();
//connect to the database
require('../model/database.php');
require('../model/functions_categories.php');


include "header.php"
?>

<div class="container content">
  <section class="section">
    <h1 id="titleheading">Welcome to League of Forums!</h1>
    <div id="information">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet vulputate tortor. Morbi volutpat est purus, eu blandit augue placerat non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec sem et arcu rutrum tempus et at nisi. Vivamus laoreet, sem feugiat pellentesque consequat, erat libero bibendum mi, vitae ullamcorper odio elit a odio. Vivamus volutpat augue justo, ut ornare nisi elementum in. Etiam sollicitudin mi a lobortis tincidunt. Praesent dictum purus id iaculis pharetra. Nullam luctus ultrices porttitor. Cras eget tellus sapien. Donec volutpat mauris eu lorem gravida finibus. Cras mollis sit amet eros eu viverra. Duis turpis libero, feugiat sed nibh quis, eleifend varius tellus. Aenean condimentum, turpis at aliquam ultrices, est purus luctus nisl, non interdum enim tortor in sem.</p>

    </div>
  </section>
  <section class="section">
    <h2 id="categoriestitle">Forum Categories:</h2>
    <?php

    //call the get_categories() function
    $result = get_categories();

    ?>
    <div class="column is-gapless">
    <?php foreach($result as $row):?>
      <div class="columns">
        <div class="column">
            <h3><a href='threads.php?cat_id=<?php echo $row['cat_id'];?>'><?php echo $row['cat_name'];?></a></h3>
            <p><?php echo $row['cat_description'];?></p>
        </div>
        <div class="column is-one-quarter">
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </section>
</div>

<?php
include "footer.php"
?>
