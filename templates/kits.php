<?php
/**
 * Created by PhpStorm.
 * User: Stephanie Dungan
 * Date: 18/03/2016
 * Time: 11:41
 */

require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';

$gender00 = $gender01 = $size00 = $size01 = $gender10 = $gender11
    = $size10 = $HorA = $SockSH = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<form action="/../WebDevProject/templates/basket.php" method="get">
    <table>
        <tr>
            <th> HOME </th>
            <th> AWAY </th>

        </tr>

        <tr>
            <td><img src="/../WebDevProject/public/images/homeShirt.jpg" height="170" width="170" ></td>
            <td><img src="/../WebDevProject/public/images/awayShirt.jpg" height="170" width="170"></td>
        </tr>

        <tr>
            <td>Gender:
                <select name="gender00">
                    <option value="--00"> -- </option>
                    <option value="MaleHome00"> Male </option>
                    <option value="FemaleHome00"> Female </option>
                </select>
            </td>
            
            <td>Gender:
                <select name="gender01">
                    <option value="--01"> -- </option>
                    <option value="MaleHome01"> Male </option>
                    <option value="FemaleHome01"> Female </option>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                Size:
                <select name="size00">
                    <option value="--00"> -- </option>
                    <option value="small00">Small</option>
                    <option value="medium00">Medium</option>
                    <option value="large00">Large</option>
                </select>
            </td>
            
            <td>
                Size:
                <select name="size01">
                    <option value="--01"> -- </option>
                    <option value="small01">Small</option>
                    <option value="medium01">Medium</option>
                    <option value="large01">Large</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><img src="/../WebDevProject/public/images/homeShorts.jpg" height="170" width="170" ></td>
            <td><img src="/../WebDevProject/public/images/awayShorts.jpg" height="170" width="170"></td>
        </tr>

        <tr>
            <td>Gender:
                <select name="gender10">
                    <option value="--10"> -- </option>
                    <option value="MaleHome10"> Male </option>
                    <option value="FemaleHome10"> Female </option>
                </select>
            </td>

            <td>Gender:
                <select name="gender11">
                    <option value="--11"> -- </option>
                    <option value="MaleHome11"> Male </option>
                    <option value="FemaleHome11"> Female </option>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                Size:
                <select name="size10">
                    <option value="--10"> -- </option>
                    <option value="small10">Small</option>
                    <option value="medium10">Medium</option>
                    <option value="large10">Large</option>
                </select>
            </td>

            <td>
                Size:
                <select name="size11">
                    <option value="--11"> -- </option>
                    <option value="small11">Small</option>
                    <option value="medium11">Medium</option>
                    <option value="large11">Large</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><img src="/../WebDevProject/public/images/homeSocks.jpg" height="170" width="170" ></td>

            <td></td>
        </tr>
        
        <tr>
            <td>
                <select name="HorA">
                    <option value="SockHome"> Home </option>
                    <option value="SockAway"> Away </option>
                </select>
            </td>

            <td></td>
        </tr>

        <tr>
            <td>
                Size:
                <select name="sizeSH">
                    <option value="--SH"> -- </option>
                    <option value="4SH"> 4 </option>
                    <option value="5SH"> 5 </option>
                    <option value="6SH"> 6 </option>
                    <option value="7SH"> 7 </option>
                    <option value="8SH"> 8 </option>
                    <option value="9SH"> 9 </option>
                </select>
            </td>

            <td></td>
        </tr>
    </table>

    <br><br>

    <input type="submit" name="Add to Basket">
</form>

<?php

require_once  __DIR__. '/../../WebDevProject/templates/footer.inc.php';