<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 03/05/2016
 * Time: 12:28
 */

require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';

?>

<h1>Basket</h1>

<h2>Kits</h2>

<?php

if($_GET["gender00"] == "MaleHome00") {
    if ($_GET["size00"] == "small00") {
        echo "Home Shirt";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Small";
    } elseif ($_GET["size00"] == "medium00") {
        echo "Home Shirt";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Medium";
    } elseif ($_GET["size00"] == "large00") {
        echo "Home Shirt";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Large";
    } else {
        echo "  ";
    }
}
if($_GET["gender00"] == "FemaleHome00") {
    if ($_GET["size00"] == "small00") {
        echo "Home Shirt";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Small";
    } elseif ($_GET["size00"] == "medium00") {
        echo "Home Shirt";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Medium";
    } elseif ($_GET["size00"] == "large00") {
        echo "Home Shirt";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Large";
    } else {
        echo "  ";
    }
}

?><br><br><?php

if($_GET["gender01"] == "MaleHome01") {
    if ($_GET["size01"] == "small01") {
        echo "Home Shirt";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Small";
    } elseif ($_GET["size01"] == "medium01") {
        echo "Home Shirt";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Medium";
    } elseif ($_GET["size01"] == "large01") {
        echo "Home Shirt";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Large";
    } else {
        echo "  ";
    }
}
if($_GET["gender01"] == "FemaleHome01") {
    if ($_GET["size01"] == "small01") {
        echo "Home Shirt";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Small";
    } elseif ($_GET["size01"] == "medium01") {
        echo "Home Shirt";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Medium";
    } elseif ($_GET["size01"] == "large01") {
        echo "Home Shirt";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Large";
    } else {
        echo "  ";
    }
}

?><br><br><?php

if($_GET["gender10"] == "MaleHome10") {
    if ($_GET["size10"] == "small10") {
        echo "Home Shorts";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Small";
    } elseif ($_GET["size10"] == "medium10") {
        echo "Home Shorts";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Medium";
    } elseif ($_GET["size10"] == "large10") {
        echo "Home Shorts";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Large";
    } else {
        echo "  ";
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
        echo "  ";
    }
}

?><br><br><?php

if($_GET["gender11"] == "MaleHome11") {
    if ($_GET["size11"] == "small11") {
        echo "Away Shorts";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Small";
    } elseif ($_GET["size11"] == "medium11") {
        echo "Away Shorts";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Medium";
    } elseif ($_GET["size11"] == "large11") {
        echo "Away Shorts";
        ?><br><?php
        echo "Male";
        ?><br><?php
        echo "Large";
    } else {
        echo "  ";
    }
}
if($_GET["gender11"] == "FemaleHome11") {
    if ($_GET["size11"] == "small11") {
        echo "Home Shorts";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Small";
    } elseif ($_GET["size11"] == "medium11") {
        echo "Home Shorts";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Medium";
    } elseif ($_GET["size11"] == "large11") {
        echo "Home Shorts";
        ?><br><?php
        echo "Female";
        ?><br><?php
        echo "Large";
    } else {
        echo "  ";
    }
}

?><br><br><?php

if ($_GET["HorA"] == "SockHome") {
    if ($_GET["sizeSH"] == "--SH") {
        echo "  ";
    } elseif ($_GET["sizeSH"] == "4SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 4";
    } elseif ($_GET["sizeSH"] == "5SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 5";
    } elseif ($_GET["sizeSH"] == "6SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 6";
    } elseif ($_GET["sizeSH"] == "6SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 6";
    } elseif ($_GET["sizeSH"] == "7SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 7";
    } elseif ($_GET["sizeSH"] == "8SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 8";
    } elseif ($_GET["sizeSH"] == "9SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 9";
    }
}
if ($_GET["HorA"] == "SockAway") {
    if ($_GET["sizeSH"] == "--SH") {
        echo "  ";
    } elseif ($_GET["sizeSH"] == "4SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 4";
    } elseif ($_GET["sizeSH"] == "5SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 5";
    } elseif ($_GET["sizeSH"] == "6SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 6";
    } elseif ($_GET["sizeSH"] == "6SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 6";
    } elseif ($_GET["sizeSH"] == "7SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 7";
    } elseif ($_GET["sizeSH"] == "8SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 8";
    } elseif ($_GET["sizeSH"] == "9SH") {
        echo "Home Socks";
        ?><br><?php
        echo "Size 9";
    }
}

?><br><br><?php






require_once __DIR__ . '/../../WebDevProject/templates/footer.inc.php';



