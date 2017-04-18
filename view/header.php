<!DOCTYPE html>
<html>
<head>
    <!-- Add variable $title to title tags to insert new value of each page -->
    <title><?php echo $title ?></title>
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
<?php include "login_form.php" ?>
    <div id="container">
        <div id="headerbuffer">
            <header id="navcontainer">
                <div id="logocontainer">
                    <h1 id="logotext">League of Forums</h1>
                </div>
                <nav id="navigation">
                    <ul>
                        <li><a href="categories.php#">Home</a></li>
                        <li><a href="categories.php#">Profile</a></li>
                        <li><a onclick="showmodal()">Login</a></li>
                    </ul>
                </nav>
            </header>
        </div>
