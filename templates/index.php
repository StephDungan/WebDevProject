<?php
/*
 *  pulls header1.inc.php file into page
 * */
require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';

?>

<div class="main">
<!-- start of main class-->

    <!-- prints to screen using h3 formatting -->
    <h3> Welcome to the Bohemian FC club shop. Please feel free to browse our products.</h3>
    <br><br>

    <!-- start of table1 class-->
    <div class ="table1">
        <table>
            <!-- start of table-->
            <!-- displays information in a table-->
            <tr>
                <!-- new table row containing information-->
    
                <td><a href="/../WebDevProject/templates/kits.php">
                    <img src="../../WebDevProject/public/images/homeShirt.jpg" height="170" width="170" alt="KITS"></a></td>
                <td><a href="/../WebDevProject/templates/tickets.php">
                    <img src="../../WebDevProject/public/images/ticket.jpg" height="170" width="230" alt="TICKETS"></a></td>
                <td><a href="/../WebDevProject/templates/merchandise.php">
                    <img src="../../WebDevProject/public/images/program.jpg" height="170" width="120" ALT="MERCHANDISE"></a></td>
            </tr>
    
            <tr>
                <!-- new table row containing information-->
                <td><a href="/../WebDevProject/templates/kits.php"> KITS </a></td>
                <td><a href="/../WebDevProject/templates/tickets.php"> TICKETS </a></td>
                <td><a href="/../WebDevProject/templates/merchandise.php"> MERCHANDISE </a></td>
            </tr>
        </table>
        <!-- end of table -->
    </div>
    <!-- end of class-->
    
</div>
<!-- end of class-->


<?php
/*
 *  restarting php
 *  bringing in footer to the page
 * */
require_once  __DIR__. '/../../WebDevProject/templates/footer.inc.php';