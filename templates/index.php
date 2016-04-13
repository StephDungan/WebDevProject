<?php
/**
 * Created by PhpStorm.
 * User: Stephanie Dungan
 * Date: 18/03/2016
 * Time: 11:41
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

<?php
require_once  __DIR__. '/../templates/footer.inc.php';