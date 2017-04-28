<!DOCTYPE html>
<html>
<head>
  <!-- Add variable $title to title tags to insert new value of each page -->
  <title><?php echo $title ?> - League of Forums</title>
  <!-- link to Bulma framework -->
  <link rel="stylesheet" type="text/css" href="css/bulma.css">
  <!-- link to Fonts -->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font.css">
  <!-- link to CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- link to javascript -->
  <script src="js/script.js"></script>
</head>

<body>
<?php
  //start session management
  session_start();

  require('../model/functions_messages.php');
  require('../model/functions_permissions.php');

  include "login_form.php";
?>
  <nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
        <h1 id="title" class="nav-item title is-1">League of Forums</h1>
      </div>
      <div class="nav-right nav-menu">
        <a class="nav-item">
          Home
        </a>
        <a class="nav-item">
          Profile
        </a>
        <?php
          if(!isset($_SESSION['user'])){
        ?>
        <a onClick="showloginmodal()" class="nav-item">
          Login
        </a>
        <?php
          } else {
        ?>
        <a href="../controller/logout_process.php" class="nav-item">
          Logout
        </a>
        <?php } ?>
      </div>
    </div>
  </nav>
