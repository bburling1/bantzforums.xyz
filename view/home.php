<?php
//connect to the database
require('../model/database.php');

include "header.php";
?>

<section class="section">
  <div class="container">
    <div class="tile is-ancestor">
      <div class="tile is-parent is-4">
        <article class="tile is-child notification is-primary">
          <p class="title">Forum</p>
          <p class="subtitle">Discuss all things gaming and create your own discussion topic using our forum!</p>
          <div class="content">
            <div class="field is-grouped">
              <p class="control">
                <a class="button is-primary is-inverted">
                  View Categories
                </a>
              </p>
              <p class="control">
                <a class="button is-primary is-inverted">
                  Create Post
                </a>
              </p>
            </div>
          </div>
        </article>
      </div>
      <div class="tile is-parent is-4">
        <article class="tile is-child notification is-info">
          <p class="title">Profile</p>
          <p class="subtitle">View your Profile or Register with our website if you haven't already!</p>
          <div class="content">
            <div class="field is-grouped">
              <p class="control">
                <a class="button is-info is-inverted">
                  View Your Profile
                </a>
              </p>
              <p class="control">
                <a class="button is-info is-inverted">
                  Create an Account
                </a>
              </p>
            </div>
          </div>
        </article>
      </div>
      <div class="tile is-parent is-4">
        <article class="tile is-child notification is-success">
          <p class="title">Forum</p>
          <div class="content">
            <div class="field is-grouped">
              <p class="control">
                <a class="button is-success is-inverted">
                  View Categories
                </a>
              </p>
              <p class="control">
                <a class="button is-success is-inverted">
                  Create Post
                </a>
              </p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<?php
include "footer.php";
?>
