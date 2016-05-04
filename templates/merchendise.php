<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 18/03/2016
 * Time: 11:37
 */

$Opponents = $progQTY = $memType = $memQTY  =
    $seaType =  $seaQTYA = $seaQTYS = $seaQTYC ="";
require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';
?>

<form action="/../WebDevProject/templates/basketMerch.php" method="post">
Match Day Programs
<br>
<img src="/../WebDevProject/public/images/program.jpg" height="165" width="117">
    <br><br>
Match:
    <br>
<select name="Opponents">
    <option value="none"> Please select a match</option>
    <option value="SlR1"> Sligo Rovers 1 </option>
    <option value="WY1"> Wexford Youths 1 </option>
    <option value="LT1"> Longford Town 1 </option>
    <option value="ShR1"> Shamrock Rovers 1 </option>
    <option value="DK1"> Dundalk 1 </option>
    <option value="CC1"> Cork City 1 </option>
    <option value="SPA1"> St Patricks Athletic 1 </option>
    <option value="GU1"> Galway Utd 1 </option>
    <option value="BW1"> Bray Wanderers 1 </option>
    <option value="DC1"> Derry City 1 </option>
    <option value="FH1"> Finn Harps 1 </option>
    <option value="SlR2"> Sligo Rovers 2 </option>
    <option value="WY2"> Wexford Youths 2 </option>
    <option value="LT2"> Longford Town 2 </option>
    <option value="ShR2"> Shamrock Rovers 2 </option>
    <option value="DK2"> Dundalk 2 </option>
</select>
    
    <select name="progQTY">
        <option value="progQTY0"> -- </option>
        <option value="progQTY1"> 1 </option>
        <option value="progQTY2"> 2 </option>
        <option value="progQTY3"> 3 </option>
        <option value="progQTY4"> 4 </option>
    </select>
<br><br>

Membership:
    <br>

    <select name="memType">
        <option value="mem--"> -- </option>
        <option value="memAdult"> Adult </option>
        <option value="memStudent"> Student </option>
        <option value="memChild"> Child </option>
    </select>

    <select name="memQTY">
        <option value="memQTY0"> -- </option>
        <option value="memQTY1"> 1 </option>
        <option value="memQTY2"> 2 </option>
        <option value="memQTY3"> 3 </option>
        <option value="memQTY4"> 4 </option>
    </select>

<br><br>

Season Ticket:
    <br>

    <select name="seaType">
        <option value="sea--"> -- </option>
        <option value="seaAdult"> Adult </option>
        <option value="seaStudent"> Student </option>
        <option value="seaChild"> Child </option>
    </select>

    <select name="seaQTY">
        <option value="seaQTY0"> -- </option>
        <option value="seaQTY1"> 1 </option>
        <option value="seaQTY2"> 2 </option>
        <option value="seaQTY3"> 3 </option>
        <option value="seaQTY4"> 4 </option>
    </select>

    <br><br>


    <input type="submit" value="Add to Basket">

</form>

<?php
require_once  __DIR__. '/../../WebDevProject/templates/footer.inc.php';