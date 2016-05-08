<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 19/04/2016
 * Time: 13:13
 */



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

<br><br>
