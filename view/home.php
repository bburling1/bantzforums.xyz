<?php
//connect to the database
require('../model/database.php');

include "header.php";
?>

<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Welcome to League of Forums
      </h1>
      <h2 class="subtitle">
        Choose one of the options below to begin <br> your contribution to the community!
      </h2>
    </div>
  </div>
</section> <!-- Banner -->
<section class="section">
  <div class="container">
    <div class="tile is-ancestor">
      <div class="tile is-parent is-6">
        <div class="tile is-child">
          <div class="card">
            <div class="card-content">
              <p class="title">
                View the Forum
              </p>
              <p class="subtitle">
                Browse our forum or create a new post! Our forum contains all types of categories for discussion
              </p>
            </div>
            <footer class="card-footer">
              <p class="card-footer-item">
                <span>
                  <a class="button is-primary">View our Forum</a>
                </span>
              </p>
              <p class="card-footer-item">
                <span>
                  <a class="button is-primary">Create a Post</a>
                </span>
              </p>
            </footer>
          </div>
        </div>
      </div>
      <div class="tile is-parent is-6">
        <div class="tile is-child">
          <div class="card">
            <div class="card-content">
              <p class="title">
                Profiles
              </p>
              <p class="subtitle">
                Create an Account and become part of our Community! Or if you have an account already, Log In!
              </p>
            </div>
            <footer class="card-footer">
              <p class="card-footer-item">
                <span>
                  <a class="button is-primary">Create an Account</a>
                </span>
              </p>
              <p class="card-footer-item">
                <span>
                  <a class="button is-primary">Log In</a>
                </span>
              </p>
            </footer>
          </div>
        </div>
      </div>
    </div> <!-- tile -->
  </div> <!-- container -->
</section> <!-- main section -->

<?php
include "footer.php";
?>
