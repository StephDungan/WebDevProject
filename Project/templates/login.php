<?php
/**
 * Created by PhpStorm.
 * User: Stephanie Dungan
 * Date: 18/03/2016
 * Time: 11:37
 */

require_once __DIR__ . '/../templates/header1.inc.php';
?>

    <nav>
        <ul>
            <li>
                <a href="index.php" class="button">Home</a>
            </li>

            <li>
                <a href="kits.php" class="button">Kits</a>
            </li>

            <li>
                <a href="tickets.php" class="button">Tickets</a>
            </li>

            <li>
                <a href="merchendise.php" class="button">Merchendise</a>
            </li>

            <li>
                <a href="login.php" class="button">Login</a>
            </li>
        </ul>
    </nav>

    <fieldset>
        <legend> Login </legend>

        <div class="space">
            <form action="form.php" method="get">
            Customer ID :
            <input type="text" name="customerID">
            <br><br>
            Password:
            <input type="password" name="password">
            <br><br>
            <input type="submit" value="Login">
            </form>
        </div>
    </fieldset>



<?php
require_once  __DIR__. '/../templates/footer.inc.php';