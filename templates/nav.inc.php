<?php
/*
 * calls the appropriate functions for the options selected in the nav bar
 * */
if (empty($indexLinkStyle)){
    $indexLinkStyle = '';
}

if (empty($kitsLinkStyle)){
    $kitsLinkStyle = '';
}

if (empty($loginLinkStyle)){
    $loginLinkStyle = '';
}

if (empty($merchandiseLinkStyle)){
    $merchandiseLinkStyle = '';
}

if (empty($ticketsLinkStyle)){
    $ticketsLinkStyle = '';
}

?>

<!-- nav list used to provide link options to other pages -->
<nav>
    <ul>
        <li>
            <a href="/../WebDevProject/templates/index.php" class="<?= $indexLinkStyle ?>">Home</a>
        </li>

        <li>
            <a href="/../WebDevProject/templates/kits.php" class="<?= $kitsLinkStyle ?>">Kits</a>
        </li>

        <li>
            <a href="/../WebDevProject/templates/tickets.php" class="<?= $ticketsLinkStyle ?>">Tickets</a>
        </li>

        <li>
            <a href="/../WebDevProject/templates/merchandise.php" class="<?= $merchandiseLinkStyle ?>">Merchandise</a>
        </li>

        <li>
            <a href="/../WebDevProject/templates/login.php" class="<?= $loginLinkStyle ?>">Login</a>
        </li>
    </ul>
</nav>
