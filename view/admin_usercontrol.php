<?php
//connect to the database
require('../model/database.php');
require('../model/functions_users.php');

$title = "Home";

include "header.php";
$permissions = is_user_admin();

$user_id = $_GET['user_id'];
$user = get_user_by_id($user_id);
?>

<section class="section">
  <div class="container">
    <h3 class="title is-3">Admin Control - <?php echo $user['username']; ?></h3>
    <form class="form" action="../controller/user_permissions_update.php?user_id=<?php echo $user_id; ?>" method="post">
      <div class="field">
        <label class="label">User Permissions</label>
        <p class="control">
          <span class="select">
            <select name="permissions">
              <option value="user">Regular User</option>
              <option value="admin">Admin</option>
            </select>
          </span>
        </p>
      </div>
      <button type="submit" name="submit" class="button is-primary">Update Permissions</button>
    </form>
    <br>
    <div class="box">
      <div class="column is-gapless">
      <?php
      $result = get_threads_by_user($user_id);
      if($result){
        foreach($result as $row):
        ?>
          <div class="columns box">
            <div class="column">
                <h3><a href='../view/post.php?thread_id=<?php echo $row['thread_id'];?>'><?php echo $row['subject'];?></a></h3>
                <p>Created on <?php $created = $row['created']; echo substr($created,0,10) . " at " . substr($created,11,5);?> by <?php $user_id = $row['user_id']; $username = get_username_by_user_id($user_id); echo $username[0];?></p>
                <?php
                  if($row['updated'] != "0000-00-00 00:00:00"){
                ?>
                <p>Last updated on <?php $updated = $row['updated']; echo substr($updated,0,10) . " at " . substr($updated,11,5); ?> </p>
                <?php
                  }
                ?>
            </div>
            <div class="column is-one-quarter">
            </div>
            <div class="field is-grouped column is-one-quarter">
              <?php
                if(isset($_SESSION['user'])){
                  if($_SESSION['permissions'] == 'admin'){
              ?>
              <p class="level-item control">
                <!-- Spacing -->
              </p>
              <p class="level-item control">
                <a class="button is-danger" href = "../controller/thread_delete.php?thread_id=<?php echo $row['thread_id'] . "&user_id=" . $user_id; ?>" onclick="return confirm('Are you sure you want to delete this thread?')">
                  Delete Thread
                </a>
              </p>
              <?php
                  }
                }
              ?>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
      <?php } else { ?>
      <div class="box">
        <p>There are no threads to display</p>
      </div>
      <?php } ?>
  </div>
</section>

<?php
include "footer.php";
?>
