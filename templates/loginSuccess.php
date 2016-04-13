<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 07/04/2016
 * Time: 10:41
 */

require_once __DIR__ . '/header1.inc.php';
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

    <h1> Welcome Back <?= $username ?> </h1>

<?php

require_once __DIR__ . '/footer.inc.php';

