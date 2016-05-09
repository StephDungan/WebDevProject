<?php
/*
 *  declares variables that will be passes into basket pages
 *      from the forms
 *  pulls header1.inc.php file into page
 * */
require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';

$gender00 = $gender01 = $size00 = $size01 = $gender10 = $gender11
    = $size10 = $HorA = $SockSH = $kits = "";
?>
    <!-- start of main class-->
<div class="main">
    <!-- start of form -->
    <!-- gives users options to select from and uses post method
            to pass them through the mainController to the basket page  -->
    <!-- Each option has a different handle so it can be identified-->
    <form action="/../WebDevProject/templates/basket.php" method="post">
        <!-- table to display the items -->
        <!-- table holds three different products with different options for each -->
        <!-- the user can select multiples of each product -->
        <table>
            <!-- new row containing headings -->
            <tr>
                <th> HOME </th>
                <th>      </th>
                <th> AWAY </th>

            </tr>

            <!-- new row containing headings of product descriptions-->
            <tr>
                <th>        </th>
                <th> JERSEYS </th>
                <th>        </th>
            </tr>

            <!-- new row containing product images-->
            <tr>
                <td><img src="/../WebDevProject/public/images/homeShirt.jpg" height="170" width="170" ></td>

                <td></td>

                <td><img src="/../WebDevProject/public/images/awayShirt.jpg" height="170" width="170"></td>
            </tr>

            <!-- new row giving usersa gender option on each product-->
            <tr>
                <td>Gender:
                    <select name="gender00">
                        <option value="--00"> -- </option>
                        <option value="MaleHome00"> Male </option>
                        <option value="FemaleHome00"> Female </option>
                    </select>
                </td>

                <td></td>

                <td>Gender:
                    <select name="gender01">
                        <option value="--01"> -- </option>
                        <option value="MaleHome01"> Male </option>
                        <option value="FemaleHome01"> Female </option>
                    </select>
                </td>
            </tr>

            <!-- new row giving users a size option on each product-->
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

                <td></td>
                
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

            <!-- new row containing headings of product descriptions-->
            <tr>
                <th>        </th>
                <th> SHORTS </th>
                <th>        </th>
            </tr>

            <!-- new row containing product images-->
            <tr>
                <td><img src="/../WebDevProject/public/images/homeShorts.jpg" height="170" width="170" ></td>

                <td></td>

                <td><img src="/../WebDevProject/public/images/awayShorts.jpg" height="170" width="170"></td>
            </tr>

            <!-- new row giving users a gender option on each product-->
            <tr>
                <td>Gender:
                    <select name="gender10">
                        <option value="--10"> -- </option>
                        <option value="MaleHome10"> Male </option>
                        <option value="FemaleHome10"> Female </option>
                    </select>
                </td>

                <td></td>


                <td>Gender:
                    <select name="gender11">
                        <option value="--11"> -- </option>
                        <option value="MaleHome11"> Male </option>
                        <option value="FemaleHome11"> Female </option>
                    </select>
                </td>
            </tr>

            <!-- new row giving users a size option on each product-->
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

                <td></td>


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

            <!-- new row containing headings of product descriptions-->
            <tr>
                <th>        </th>
                <th> SOCKS </th>
                <th>        </th>
            </tr>

            <!-- new row containing product images-->
            <tr>

                <td></td>

                <td><img src="/../WebDevProject/public/images/homeSocks.jpg" height="170" width="170" ></td>

                <td></td>
            </tr>

            <!-- new row giving users a type option-->
            <tr>

                <td></td>

                <td>
                    <select name="HorA">
                        <option value="SockHome"> Home </option>
                        <option value="SockAway"> Away </option>
                    </select>
                </td>

                <td></td>
            </tr>

            <!-- new row giving users a size option on each product-->
            <tr>

                <td></td>

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
        <!-- end of table-->

        <br>

        <input type="submit" value="Add to Basket">
        <!-- submit button -->
        <!-- passes information to /basketMerch.php -->
    </form>
    <!-- end of form -->
</div>
    <!-- end of main class-->
<?php
/*
 *  restarting php
 *  bringing in footer to the page
 * */
require_once  __DIR__. '/../../WebDevProject/templates/footer.inc.php';