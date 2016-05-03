<?php
/**
 * Created by PhpStorm.
 * User: Stephanie Dungan
 * Date: 18/03/2016
 * Time: 11:41
 */

require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';

$gender00 = $gender01 = $size00 = $size01 = $gender10 = $gender11
    = $size10 = $size = "";
if($_SERVER["REQUEST_METHOD"] == "GET")
{
    if(empty($_GET["gender00"]))
    {
        $gender00 = "";
    } else {
        $gender00 = test_input($_POST["gender00"]);
    }

    if(empty($_GET["gender01"]))
    {
        $gender00 = "";
    } else {
        $gender00 = test_input($_POST["gender01"]);
    }

    if(empty($_GET["size00"]))
    {
        $gender00 = "";
    } else {
        $gender00 = test_input($_POST["size00"]);
    }

    if(empty($_GET["size01"]))
    {
        $gender00 = "";
    } else {
        $gender00 = test_input($_POST["size01"]);
    }
}

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
                    <option value="--"> -- </option>
                    <option value="MaleHome"> Male </option>
                    <option value="FemaleHome"> Female </option>
                </select>
            </td>

            <td>Gender:
                <select name="gender01">
                    <option value="--"> -- </option>
                    <option value="MaleAway"> Male </option>
                    <option value="FemaleAway"> Female </option>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                Size:
                <select name="size00">
                    <option value="--"> -- </option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
            </td>

            <td>
                Size:
                <select name="size01">
                    <option value="--"> -- </option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
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
                    <option value="--"> -- </option>
                    <option value="MaleHome"> Male </option>
                    <option value="FemaleHome"> Female </option>
                </select>
            </td>

            <td>Gender:
                <select name="gender11">
                    <option value="--"> -- </option>
                    <option value="MaleHome"> Male </option>
                    <option value="FemaleHome"> Female </option>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                Size:
                <select name="size10">
                    <option value="--"> -- </option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
            </td>
            <td>
                Size:
                <select name="size11">
                    <option value="--"> -- </option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><img src="/../WebDevProject/public/images/homeSocks.jpg" height="170" width="170" ></td>
            <td><img src="/../WebDevProject/public/images/awaySocks.jpg" height="170" width="170"></td>
        </tr>

        <tr>
            <td>
                Size:
                <select name="size">
                    <option value="--"> -- </option>
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
                    <option value="--"> -- </option>
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

    <br><br>

    <input type="submit" name="SUBMIT">
</form>

<?php

require_once  __DIR__. '/../../WebDevProject/templates/footer.inc.php';