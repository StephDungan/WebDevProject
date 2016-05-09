<?php
/*
 * calls the appropriate functions for the options selected in the nav bar
 * */
if (empty($kitsLinkStyle)){
    $kitsLinkStyle = '';
}

if (empty($infoLinkStyle)){
    $infoLinkStyle = '';
}

if (empty($merchandiseLinkStyle)){
    $merchandiseLinkStyle = '';
}

if (empty($ticketsLinkStyle)){
    $ticketsLinkStyle = '';
}

?>

<!-- list used to provide link options to other pages only used for pages specific to the admin account-->
<div class="adminNav" >
    <ul>
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
            <a href="/../WebDevProject/templates/info.php" class="<?= $infoLinkStyle ?>">Info</a>
        </li>
    </ul>
</div>
