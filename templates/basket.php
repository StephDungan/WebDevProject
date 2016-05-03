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

if(($_GET["gender00"] == "MaleHome") & ($_GET["size00"] == "small"))
{
    echo "Home Kit";
    ?><br><?php
    echo "Male";
    ?><br><?php
    echo "Small";
} elseif (($_GET["gender00"] == "MaleHome") & ($_GET["size00"] == "medium"))
{
    echo "Home Kit";
    ?><br><?php
    echo "Male";
    ?><br><?php
    echo "Medium";
} elseif (($_GET["gender00"] == "MaleHome") & ($_GET["size00"] == "large"))
{
    echo "Home Kit";
    ?><br><?php
    echo "Male";
    ?><br><?php
    echo "Large";
} else{
    echo "  ";
}

?>
<br><br>
<?php

if (($_GET["gender00"] == "FemaleHome") & ($_GET["size00"] == "small"))
{
    echo "Home Kit";
    ?><br><?php
    echo "Female";
    ?><br><?php
    echo "Small";
} elseif (($_GET["gender00"] == "FemaleHome") & ($_GET["size00"] == "medium"))
{
    echo "Home Kit";
    ?><br><?php
    echo "Female";
    ?><br><?php
    echo "Medium";
} elseif (($_GET["gender00"] == "FemaleHome") & ($_GET["size00"] == "large"))
{
    echo "Home Kit";
    ?><br><?php
    echo "Female";
    ?><br><?php
    echo "Large";
} else{
    echo "  ";
}



require_once __DIR__ . '/../../WebDevProject/templates/footer.inc.php';



