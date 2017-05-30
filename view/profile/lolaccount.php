<?php
session_start();
?>
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-4">
      </div>
      <div class="column is-4">
        <form class="form" action="../controller/get_ranked_data.php" method="post">
          <h2 class="form-title">Link Your League of Legends Account</h2>
          <div class="field">
            <label class="label"><b>League of Legends Username</b></label>
            <p class="control">
              <input class="input" type="text" placeholder="Username" name="lolusername" required>
            </p>
          </div>
          <div class="field">
            <label class="label">Region</label>
            <p class="control">
              <span class="select">
                <select name="region">
                  <option value="oc1">OCE</option>
                  <option value="na1">NA</option>
                </select>
              </span>
            </p>
          </div>
          <div>
            <input name="user_id" type="hidden" value="<?php echo $_SESSION['user_id']; ?>">
          </div>
          <div class="field">
            <p class="control">
              <button class="button is-primary" type="submit">Submit</button>
            </p>
          </div>
        </form>
      </div>
      <div class="column is-4">
      </div>
    </div>
  </div>
</section>
