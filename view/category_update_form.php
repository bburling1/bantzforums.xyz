<?php
  //start session management
  session_start();
  //connect to the database
  require('../model/database.php');
  //retrieve functions
  require('../model/functions_categories.php');
  require('../model/functions_messages.php');

  $title = "Add Category";

  include "header.php"
?>

<section class="section">
  <div class="container content">
    <form class="form" action="../controller/category_update_process.php" method="post">
      <h2 class="form-title">Update a Discussion Category</h2>
      <?php
        //user messages
        $message = user_message();

        //retrieve the category information to autofill the form
        $result = get_category();
      ?>
      <div class="field">
        <label class="label"><b>Category Name*</b></label>
        <p class="control">
          <input class="input" type="text" placeholder="Category Name" name="cat_name" value="<?php echo $result['cat_name'];?>" required>
        </p>
      </div>
      <div class="field">
        <label class="label"><b>Category Description*</b></label>
        <p class="control">
          <textarea class="textarea" placeholder="Description" name="cat_description"><?php echo $result['cat_description'];?></textarea>
        </p>
      </div>
      <div>
        <!-- the table has a hidden form field to pass the categoryID to the next page -->
        <input name="cat_id" type="hidden" value="<?php echo $_GET['cat_id']; ?>">
      </div>
      <div class="field">
        <p class="control">
          <button class="button is-primary" type="submit">Register</button>
        </p>
      </div>
    </form>
  </div>
</section>

<?php
require('footer.php');
?>