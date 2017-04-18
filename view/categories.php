<?php
//connect to the database
require('../model/database.php');
require('../model/functions_categories.php');


include "header.php"
?>

<div id="content">
    <h1 id="titleheading">Welcome to League of Forums!</h1>
    <div id="information">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet vulputate tortor. Morbi volutpat est purus, eu blandit augue placerat non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec sem et arcu rutrum tempus et at nisi. Vivamus laoreet, sem feugiat pellentesque consequat, erat libero bibendum mi, vitae ullamcorper odio elit a odio. Vivamus volutpat augue justo, ut ornare nisi elementum in. Etiam sollicitudin mi a lobortis tincidunt. Praesent dictum purus id iaculis pharetra. Nullam luctus ultrices porttitor. Cras eget tellus sapien. Donec volutpat mauris eu lorem gravida finibus. Cras mollis sit amet eros eu viverra. Duis turpis libero, feugiat sed nibh quis, eleifend varius tellus. Aenean condimentum, turpis at aliquam ultrices, est purus luctus nisl, non interdum enim tortor in sem.</p>
        
    </div>
    <h2 id="categoriestitle">Forum Categories:</h2>
    <?php

    //call the get_categories() function
    $result = get_categories();

    ?>
    <div id="forum_grid">
    <?php foreach($result as $row):?>
        <div class="category" id="cat1">
            <div class="cattitle">
                <h3><a href='threads.php?cat_id=<?php echo $row['cat_id'];?>'><?php echo $row['cat_name'];?></a></h3>
                <p><?php echo $row['cat_description'];?></p>
            </div>
            <div class="catinfo">

            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<?php 
include "footer.php"
?>