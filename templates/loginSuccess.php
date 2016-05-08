<?php
/**
 * Created by PhpStorm.
 * User: Stephanie Dungan
 * Date: 18/03/2016
 * Time: 11:37
 */

require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';

?>
        <div class="main">
            <h1>Welcome to your account <?php echo $_POST["username"]?> </h1>

            <h3> Welcome to the Bohemian FC club shop. Please feel free to browse our products.</h3>


            <h4><a href="/../WebDevProject/templates/kits.php"> KITS </a></h4>
            <h4><a href="/../WebDevProject/templates/tickets.php"> TICKETS </a></h4>
            <h4><a href="/../WebDevProject/templates/merchandise.php"> MERCHANDISE </a></h4>
        </div>

<?php

require_once  __DIR__ . '/../../WebDevProject/templates/footer.inc.php';