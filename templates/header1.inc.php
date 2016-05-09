<!doctype html>
<html lang="en">
<head>
    <title>Bohemian FC Club Shop</title>
    <meta charset="utf-8">
    <style>
        @import "/../WebDevProject/public/css/basic.css";
        @import "/../WebDevProject/public/css/footer.css";
        @import "/../WebDevProject/public/css/nav.css";
        @import "/../WebDevProject/public/css/adminNav.css";
    </style>
</head>
<body>
<div id="column_container">
    <!-- start of column_container-->
<header>
    <!-- page heading -->
    <!-- displays image and turns it into a link for the home page of the site-->
    
        <a href="/../WebDevProject/templates/index.php">
            <img src="/../WebDevProject/public/images/BohemianDublin.png" alt="Shop Home" height = "150" width="150">
        </a>

</header>

<?php
/*
 * restarts php to import nav.inc.php for non-admin nav bar
 * */
require_once __DIR__ . '/../../WebDevProject/templates/nav.inc.php';





