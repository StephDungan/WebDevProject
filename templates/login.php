<?php
/**
 * Created by PhpStorm.
 * User: Stephanie Dungan
 * Date: 18/03/2016
 * Time: 11:37
 */

require_once __DIR__ . '/../templates/header1.inc.php';
require_once __DIR__ . '/../templates/nav.inc.php';
?>
    <fieldset>
        <legend> Login </legend>
            <form action="../public/index.php?action=processLogin" method="post">
                Customer ID :
                <input type="text" name="username">
                <br><br>
                Password:
                <input type="password" name="password">
                <br><br>
                <input type="submit" value="Login">
            </form>
    </fieldset>



<?php
require_once  __DIR__. '/../templates/footer.inc.php';