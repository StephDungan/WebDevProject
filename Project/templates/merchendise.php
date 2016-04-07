<?php
/**
 * Created by PhpStorm.
 * User: Steph
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

<br>

<form action="form.php" method="get">
Match Day Programs
<br>
<img src="../public/images/program.jpg" height="165" width="117">
    <br><br>
Match:
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
        <option value="nonePr"> 0 </option>
        <option value="onePr"> 1 </option>
        <option value="twoPr"> 2 </option>
        <option value="threePr"> 3 </option>
        <option value="fourPr"> 4 </option>
    </select>
<br><br>

Membership:
    <br>
    <label>
        <input type="radio" name="memType" value="adult">
        Adult
    </label>

    <select name="memQTY">
        <option value="noneMA"> 0 </option>
        <option value="oneMA"> 1 </option>
        <option value="twoMA"> 2 </option>
        <option value="threeMA"> 3 </option>
        <option value="fourMA"> 4 </option>
    </select>

    <label>
        <input type="radio" name="memType" value="student">
        Student/OAP
    </label>

    <select name="memQTY">
        <option value="noneMS"> 0 </option>
        <option value="oneMS"> 1 </option>
        <option value="twoMS"> 2 </option>
        <option value="threeMS"> 3 </option>
        <option value="fourMS"> 4 </option>
    </select>

    <label>
        <input type="radio" name="memType" value="child">
        Child
    </label>

    <select name="memQTY">
        <option value="noneMC"> 0 </option>
        <option value="oneMC"> 1 </option>
        <option value="twoMC"> 2 </option>
        <option value="threeMC"> 3 </option>
        <option value="fourMC"> 4 </option>
    </select>

<br><br>

Season Ticket:
    <br>
    <label>
        <input type="radio" name="seaType" value="adult">
        Adult
    </label>

    <select name="seaQTY">
        <option value="noneSA"> 0 </option>
        <option value="oneSA"> 1 </option>
        <option value="twoSA"> 2 </option>
        <option value="threeSA"> 3 </option>
        <option value="fourSA"> 4 </option>
    </select>

    <label>
        <input type="radio" name="seaType" value="student">
        Student/OAP
    </label>

    <select name="seaQTY">
        <option value="noneSS"> 0 </option>
        <option value="oneSS"> 1 </option>
        <option value="twoSS"> 2 </option>
        <option value="threeSS"> 3 </option>
        <option value="fourSS"> 4 </option>
    </select>

    <label>
        <input type="radio" name="seaType" value="child">
        Child
    </label>

    <select name="seaQTY">
        <option value="noneSC"> 0 </option>
        <option value="oneSC"> 1 </option>
        <option value="twoSC"> 2 </option>
        <option value="threeSC"> 3 </option>
        <option value="fourSC"> 4 </option>
    </select>

    <br><br>

    <input type="submit" value="Add to Basket">

</form>


<?php
require_once  __DIR__. '/../templates/footer.inc.php';