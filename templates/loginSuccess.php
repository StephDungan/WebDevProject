<?php
/*
 *  pulls header1.inc.php file into page
 * */
require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';

?>
<!-- start of main class-->
<div class="main">
    
    <!-- prints to screen using h1 formatting-->
    <h1>Welcome to your account <?php echo $_POST["username"]?> </h1>

    <!-- prints to screen using h3 formatting-->
    <h3> Welcome to the Bohemian FC club shop. Please feel free to browse our products.</h3>

    <!-- prints to screen using h4 formatting-->
    <h4><a href="/../WebDevProject/templates/kits.php"> KITS </a></h4>
    <h4><a href="/../WebDevProject/templates/tickets.php"> TICKETS </a></h4>
    <h4><a href="/../WebDevProject/templates/merchandise.php"> MERCHANDISE </a></h4>
        
</div>
<!-- end of main class-->

<?php
/*
 *  restarting php
 *  bringing in footer to the page
 * */
require_once  __DIR__ . '/../../WebDevProject/templates/footer.inc.php';