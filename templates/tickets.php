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

<br><br>
<form action="form.php" method="get">
    <table>

        <tr>
            <th>Opposition</th>
            <th>Date</th>
            <th>Adult</th>
            <th>Student/OAP</th>
            <th>Child</th>
        </tr>

        <tr>
            <td> Sligo Rovers </td>
            <td> 11/03/2016 </td>
            <td><select name="SLR1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="SLR1S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="SLR1C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Wexford Youths</td>
            <td> 18/03/2016 </td>
            <td><select name="WY1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="WY1S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="WY1C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Longford Town </td>
            <td> 01/04/2016 </td>
            <td><select name="LT1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="LT1S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="LT1C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Shamrock Rovers </td>
            <td> 15/04/2016 </td>
            <td><select name="SHR1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="SHR1S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="SHR1C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Dundalk </td>
            <td> 29/04/2016 </td>
            <td><select name="DD1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="DD1S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="DD1SA">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Cork City </td>
            <td> 10/05/2016 </td>
            <td><select name="CC1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="CC1S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="CC1C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> St Patricks Athletic </td>
            <td> 29/05/2016 </td>
            <td><select name="SPA1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="SPAS">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="SPA1C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Galway Utd </td>
            <td> 24/06/2016 </td>
            <td><select name="GU1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="GU1S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="GU1C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Bray Wanderers </td>
            <td> 08/07/2016 </td>
            <td><select name="BW1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="BW1S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="BW1C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Derry City </td>
            <td> 22/07/2016 </td>
            <td><select name="DC1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="DC1S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="DC1C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Finn Harps </td>
            <td> 05/08/2016 </td>
            <td><select name="FH1A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="FH1S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="FH1C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Sligo Rovers </td>
            <td> 15/08/2016 </td>
            <td><select name="SLR2A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="SLR2S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="SLR2C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Wexford Youths </td>
            <td> 02/09/2016 </td>
            <td><select name="WY2A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="WY2S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="WY2C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Longford Town </td>
            <td> 23/09/2016 </td>
            <td><select name="LT2A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="LT2S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="LT2C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Shamrock Rovers </td>
            <td> 07/10/2016 </td>
            <td><select name="SHR2A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="SHR2S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="SHR2C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Dundalk </td>
            <td> 21/10/2016 </td>
            <td><select name="DD2A">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="DD2S">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
            <td><select name="DD2C">
                    <option value="--"> -- </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select></td>
        </tr>



    </table>

    <br><br>

    <input type="submit" value="Add to Basket">

    </form>

<?php
require_once  __DIR__. '/../templates/footer.inc.php';