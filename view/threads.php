<?php
//start session management
session_start();
//connect to the database
require('../model/database.php');
require('../model/functions_categories.php');
require('../model/functions_threads.php');


include "header.php"
?>

<div id="content">
    <?php $result = get_category();?>
    <h2 id="categoriestitle">Threads from <?php echo $result['cat_name'];?></h2>
    <?php

    //call the get_categories() function
    $result = get_threads_by_category();

    ?>
    <div id="forum_grid">
    <?php foreach($result as $row):?>
        <div class="category">
            <div class="cattitle">
                <h3><?php echo $row['subject'];?></h3>
                <p><?php echo $row['created'];?></p>
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
