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


<table>
    <tr>
        <td><img src="../public/images/homeShirt.jpg" height="170" width="170" ></td>
        <td><img src="../public/images/awayShirt.jpg" height="170" width="170"></td>
    </tr>

    <tr>
        <td>Gender:
            <br>
            <label>
                <input type="radio" name="gender" value="menHome" checked="checked">
                Mens
            </label>
            <label>
                <input type="radio" name="gender" value="womenHome">
                Womens
            </label>
        </td>

        <td>Gender:
            <br>
            <label>
                <input type="radio" name="gender1" value="menAway" checked="checked">
                Mens
            </label>
            <label>
                <input type="radio" name="gender1" value="womenAway">
                Womens
            </label>
        </td>
    </tr>

    <tr>
        <td>
            Size:
            <select name="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </td>
        <td>
            Size:
            <select name="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </td>
    </tr>

    <tr>
        <td><img src="../public/images/homeShorts.jpg" height="170" width="170" ></td>
        <td><img src="../public/images/awayShorts.jpg" height="170" width="170"></td>
    </tr>

    <tr>
        <td>Gender:
            <br>
            <label>
                <input type="radio" name="gender2" value="menHome" checked="checked">
                Mens
            </label>
            <label>
                <input type="radio" name="gender2" value="womenHome">
                Womens
            </label>
        </td>

        <td>Gender:
            <br>
            <label>
                <input type="radio" name="gender3" value="menAway" checked="checked">
                Mens
            </label>
            <label>
                <input type="radio" name="gender3" value="womenAway">
                Womens
            </label>
        </td>
    </tr>

    <tr>
        <td>
            Size:
            <select name="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </td>
        <td>
            Size:
            <select name="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><img src="../public/images/homeSocks.jpg" height="170" width="170" ></td>
        <td><img src="../public/images/awaySocks.jpg" height="170" width="170"></td>
    </tr>

    <tr>
        <td>
            Size:
            <select name="size">
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
            </select>
        </td>
        <td>
            Size:
            <select name="size">
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
            </select>
        </td>
    </tr>



</table>


<?php
require_once  __DIR__. '/../templates/footer.inc.php';