<?php
/**
 * Created by PhpStorm.
 * User: Stephanie Dungan
 * Date: 18/03/2016
 * Time: 11:41
 */

require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';

?>

<div class="main">

    <p> Welcome to the Bohemian FC club shop. Please feel free to browse our products.<p>
    <br><br>

    <div class ="table1">
        <table>
            <tr>
    
                <td><a href="/../WebDevProject/templates/kits.php">
                    <img src="../../WebDevProject/public/images/homeShirt.jpg" height="170" width="170" alt="KITS"></a></td>
                <td><a href="/../WebDevProject/templates/tickets.php">
                    <img src="../../WebDevProject/public/images/ticket.jpg" height="170" width="230" alt="TICKETS"></a></td>
                <td><a href="/../WebDevProject/templates/merchandise.php">
                    <img src="../../WebDevProject/public/images/program.jpg" height="170" width="120" ALT="MERCHANDISE"></a></td>
            </tr>
    
            <tr>
                <td><a href="/../WebDevProject/templates/kits.php"> KITS </a></td>
                <td><a href="/../WebDevProject/templates/tickets.php"> TICKETS </a></td>
                <td><a href="/../WebDevProject/templates/merchandise.php"> MERCHANDISE </a></td>
            </tr>
        </table>
    </div>
    
</div>


<?php
require_once  __DIR__. '/../../WebDevProject/templates/footer.inc.php';