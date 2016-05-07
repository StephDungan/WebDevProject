<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 03/05/2016
 * Time: 12:28
 */

require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';

?>

    <div class="main">

<h1>Kit Basket</h1>

<?php

if($_GET["gender00"] == "MaleHome00") {
    if ($_GET["size00"] == "small00") {
        echo "Home Shirt    Male    Small";
        ?><br><?php
    } elseif ($_GET["size00"] == "medium00") {
        echo "Home Shirt    Male    Medium";
        ?><br><?php
    } elseif ($_GET["size00"] == "large00") {
        echo "Home Shirt    Male    Large";
        ?><br><?php
    } else {
    }
}
if($_GET["gender00"] == "FemaleHome00") {
    if ($_GET["size00"] == "small00") {
        echo "Home Shirt    Female  Small";
        ?><br><?php
    } elseif ($_GET["size00"] == "medium00") {
        echo "Home Shirt    Female  Medium";
        ?><br><?php
    } elseif ($_GET["size00"] == "large00") {
        echo "Home Shirt    Female  Large";
        ?><br><?php
    } else {
    }
}

if($_GET["gender01"] == "MaleHome01") {
    if ($_GET["size01"] == "small01") {
        echo "Home Shirt    Male    Small";
        ?><br><?php
    } elseif ($_GET["size01"] == "medium01") {
        echo "Home Shirt    Male    Medium";
    } elseif ($_GET["size01"] == "large01") {
        echo "Home Shirt    Male    Large";
    } else {
    }
}
if($_GET["gender01"] == "FemaleHome01") {
    if ($_GET["size01"] == "small01") {
        echo "Away Shirt    Female  Small";
        ?><br><?php
    } elseif ($_GET["size01"] == "medium01") {
        echo "Away Shirt    Female  Medium";
        ?><br><?php
    } elseif ($_GET["size01"] == "large01") {
        echo "Away Shirt    Female  Large";
        ?><br><?php
    } else {
    }
}

if($_GET["gender10"] == "MaleHome10") {
    if ($_GET["size10"] == "small10") {
        echo "Away Shirt    Male    Small";
        ?><br><?php
    } elseif ($_GET["size10"] == "medium10") {
        echo "Away Shirt    Male   Medium";
        ?><br><?php
    } elseif ($_GET["size10"] == "large10") {
        echo "Away Shirt    Male    Large";
        ?><br><?php
    } else {
    }
}
if($_GET["gender10"] == "FemaleHome10") {
    if ($_GET["size10"] == "small10") {
        echo "Home Shorts";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Small";
    } elseif ($_GET["size10"] == "medium10") {
        echo "Home Shorts";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Medium";
    } elseif ($_GET["size10"] == "large10") {
        echo "Home Shorts";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Large";
    } else {
    }
}

if($_GET["gender11"] == "MaleHome11") {
    if ($_GET["size11"] == "small11") {
        echo "Home Shorts    Male    Small";
        ?><br><?php
    } elseif ($_GET["size11"] == "medium11") {
        echo "Home Shorts    Male    Medium";
        ?><br><?php
    } elseif ($_GET["size11"] == "large11") {
        echo "Home Shorts    Male    Large";
        ?><br><?php
    } else {
    }
}

if($_GET["gender11"] == "FemaleHome11") {
    if ($_GET["size11"] == "small11") {
        echo "Home Shorts    Female    Small";
        ?><br><?php
    } elseif ($_GET["size11"] == "medium11") {
        echo "Home Shorts    Female    Medium";
        ?><br><?php
    } elseif ($_GET["size11"] == "large11") {
        echo "Home Shorts    Female    Large";
        ?><br><?php
    } else {
    }
}

if ($_GET["HorA"] == "SockHome") {
    if ($_GET["sizeSH"] == "--SH") {
        echo "  ";
    } elseif ($_GET["sizeSH"] == "4SH") {
        echo "Home Socks    Size 4";
        ?><br><?php
    } elseif ($_GET["sizeSH"] == "5SH") {
        echo "Home Socks    Size 5";
        ?><br><?php
    } elseif ($_GET["sizeSH"] == "6SH") {
        echo "Home Socks    Size 6";
        ?><br><?php
    }elseif ($_GET["sizeSH"] == "7SH") {
        echo "Home Socks    Size 7";
        ?><br><?php
    } elseif ($_GET["sizeSH"] == "8SH") {
        echo "Home Socks    Size 8";
        ?><br><?php
    } elseif ($_GET["sizeSH"] == "9SH") {
        echo "Home Socks    Size 9";
        ?><br><?php
    }
}

if ($_GET["HorA"] == "SockAway")
{
    if ($_GET["sizeSH"] == "--SH") {
        echo "  ";
    } elseif ($_GET["sizeSH"] == "4SH") {
        echo "Away Socks    Size 4";
        ?><br><?php
    } elseif ($_GET["sizeSH"] == "5SH") {
        echo "Away Socks    Size 5";
        ?><br><?php
    } elseif ($_GET["sizeSH"] == "6SH") {
        echo "Away Socks    Size 6";
        ?><br><?php
    } elseif ($_GET["sizeSH"] == "7SH") {
        echo "Away Socks    Size 7";
        ?><br><?php
    } elseif ($_GET["sizeSH"] == "8SH") {
        echo "Away Socks    Size 8";
        ?><br><?php
    } elseif ($_GET["sizeSH"] == "9SH") {
        echo "Away Socks    Size 9";
        ?><br><?php
    }
}

?>
    
</div>
    <br><br><?php

require_once __DIR__ . '/../../WebDevProject/templates/footer.inc.php';



