<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 18/03/2016
 * Time: 11:37
 */

require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';

$SLR1A = $SLR1S = $SLR1C = $WY1A = $WY1S = $WY1C = $LT1A = $LT1S = $LT1C =
    $SHR1A = $SHR1S = $SHR1C = $DD1A = $DD1S = $DD1C = $CC1A = $CC1S = $CC1C =
    $SPA1A = $SPA1S = $SPA1C = $GU1A = $GU1S = $GU1C = $BW1A = $BW1S = $BW1C =
    $DC1A = $DC1S = $DC1C = $FH1A = $FH1S = $FH1C = $SLR2A = $SLR2S = $SLR2C = 
    $WY2A = $WY2S = $WY2C = $LT2A = $LT2S = $LT2C = $SHR2A = $SHR2S = $SHR2C = 
    $DD2A = $DD2S = $DD2C = "";

    function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form action="/../WebDevProject/templates/basketTickets.php" method="post">
    <table>

        <tr>
            <td> Sligo Rovers </td>
            <td> 11/03/2016 </td>
            <td><select name="SLR1A">
                    <option value="SLR1A--"> -- </option>
                    <option value="SLR1A1"> 1 </option>
                    <option value="SLR1A2"> 2 </option>
                    <option value="SLR1A3"> 3 </option>
                    <option value="SLR1A4"> 4 </option>
                </select></td>
            <td><select name="SLR1S">
                    <option value="SLR1S--"> -- </option>
                    <option value="SLR1S1"> 1 </option>
                    <option value="SLR1S2"> 2 </option>
                    <option value="SLR1S3"> 3 </option>
                    <option value="SLR1S4"> 4 </option>
                </select></td>
            <td><select name="SLR1C">
                    <option value="SLR1C--"> -- </option>
                    <option value="SLR1C1"> 1 </option>
                    <option value="SLR1C2"> 2 </option>
                    <option value="SLR1C3"> 3 </option>
                    <option value="SLR1C4"> 4 </option>
                </select>
            </td>
        </tr>

        <tr>
            <td> Wexford Youths </td>
            <td> 18/03/2016 </td>
            <td><select name="WY1A">
                    <option value="WY1A--"> -- </option>
                    <option value="WY1A1"> 1 </option>
                    <option value="WY1A2"> 2 </option>
                    <option value="WY1A3"> 3 </option>
                    <option value="WY1A4"> 4 </option>
                </select></td>
            <td><select name="WY1S">
                    <option value="WY1S--"> -- </option>
                    <option value="WY1S1"> 1 </option>
                    <option value="WY1S2"> 2 </option>
                    <option value="WY1S3"> 3 </option>
                    <option value="WY1S4"> 4 </option>
                </select></td>
            <td><select name="WY1C">
                    <option value="WY1C--"> -- </option>
                    <option value="WY1C1"> 1 </option>
                    <option value="WY1C2"> 2 </option>
                    <option value="WY1C3"> 3 </option>
                    <option value="WY1C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Longford Town </td>
            <td> 01/04/2016 </td>
            <td><select name="LT1A">
                    <option value="LT1A--"> -- </option>
                    <option value="LT1A1"> 1 </option>
                    <option value="LT1A2"> 2 </option>
                    <option value="LT1A3"> 3 </option>
                    <option value="LT1A4"> 4 </option>
                </select></td>
            <td><select name="LT1S">
                    <option value="LT1S--"> -- </option>
                    <option value="LT1S1"> 1 </option>
                    <option value="LT1S2"> 2 </option>
                    <option value="LT1S3"> 3 </option>
                    <option value="LT1S4"> 4 </option>
                </select></td>
            <td><select name="LT1C">
                    <option value="LT1C--"> -- </option>
                    <option value="LT1C1"> 1 </option>
                    <option value="LT1C2"> 2 </option>
                    <option value="LT1C3"> 3 </option>
                    <option value="LT1C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Shamrock Rovers </td>
            <td> 15/04/2016 </td>
            <td><select name="SHR1A">
                    <option value="--"> -- </option>
                    <option value="SHR1A1"> 1 </option>
                    <option value="SHR1A2"> 2 </option>
                    <option value="SHR1A3"> 3 </option>
                    <option value="SHR1A4"> 4 </option>
                </select></td>
            <td><select name="SHR1S">
                    <option value="SHR1S--"> -- </option>
                    <option value="SHR1S1"> 1 </option>
                    <option value="SHR1S2"> 2 </option>
                    <option value="SHR1S3"> 3 </option>
                    <option value="SHR1S4"> 4 </option>
                </select></td>
            <td><select name="SHR1C">
                    <option value="SHR1C--"> -- </option>
                    <option value="SHR1C1"> 1 </option>
                    <option value="SHR1C2"> 2 </option>
                    <option value="SHR1C3"> 3 </option>
                    <option value="SHR1C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Dundalk </td>
            <td> 29/04/2016 </td>
            <td><select name="DD1A">
                    <option value="DD1A--"> -- </option>
                    <option value="DD1A1"> 1 </option>
                    <option value="DD1A2"> 2 </option>
                    <option value="DD1A3"> 3 </option>
                    <option value="DD1A4"> 4 </option>
                </select></td>
            <td><select name="DD1S">
                    <option value="DD1S--"> -- </option>
                    <option value="DD1S1"> 1 </option>
                    <option value="DD1S2"> 2 </option>
                    <option value="DD1S3"> 3 </option>
                    <option value="DD1S4"> 4 </option>
                </select></td>
            <td><select name="DD1C">
                    <option value="DD1C--"> -- </option>
                    <option value="DD1C1"> 1 </option>
                    <option value="DD1C2"> 2 </option>
                    <option value="DD1C3"> 3 </option>
                    <option value="DD1C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Cork City </td>
            <td> 10/05/2016 </td>
            <td><select name="CC1A">
                    <option value="CC1A--"> -- </option>
                    <option value="CC1A1"> 1 </option>
                    <option value="CC1A2"> 2 </option>
                    <option value="CC1A3"> 3 </option>
                    <option value="CC1A4"> 4 </option>
                </select></td>
            <td><select name="CC1S">
                    <option value="CC1S--"> -- </option>
                    <option value="CC1S1"> 1 </option>
                    <option value="CC1S2"> 2 </option>
                    <option value="CC1S3"> 3 </option>
                    <option value="CC1S4"> 4 </option>
                </select></td>
            <td><select name="CC1C">
                    <option value="CC1C--"> -- </option>
                    <option value="CC1C1"> 1 </option>
                    <option value="CC1C2"> 2 </option>
                    <option value="CC1C3"> 3 </option>
                    <option value="CC1C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> St Patricks Athletic </td>
            <td> 29/05/2016 </td>
            <td><select name="SPA1A">
                    <option value="SPA1A--"> -- </option>
                    <option value="SPA1A1"> 1 </option>
                    <option value="SPA1A2"> 2 </option>
                    <option value="SPA1A3"> 3 </option>
                    <option value="SPA1A4"> 4 </option>
                </select></td>
            <td><select name="SPA1S">
                    <option value="SPA1S--"> -- </option>
                    <option value="SPA1S"> 1 </option>
                    <option value="SPA2S"> 2 </option>
                    <option value="SPA3S"> 3 </option>
                    <option value="SPA4S"> 4 </option>
                </select></td>
            <td><select name="SPA1C">
                    <option value="SPA1C--"> -- </option>
                    <option value="SPA1C1"> 1 </option>
                    <option value="SPA1C2"> 2 </option>
                    <option value="SPA1C3"> 3 </option>
                    <option value="SPA1C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Galway Utd </td>
            <td> 24/06/2016 </td>
            <td><select name="GU1A">
                    <option value="GU1A--"> -- </option>
                    <option value="GU1A1"> 1 </option>
                    <option value="GU1A2"> 2 </option>
                    <option value="GU1A3"> 3 </option>
                    <option value="GU1A4"> 4 </option>
                </select></td>
            <td><select name="GU1S">
                    <option value="GU1S--"> -- </option>
                    <option value="GU1S1"> 1 </option>
                    <option value="GU1S2"> 2 </option>
                    <option value="GU1S3"> 3 </option>
                    <option value="GU1S4"> 4 </option>
                </select></td>
            <td><select name="GU1C">
                    <option value="GU1C--"> -- </option>
                    <option value="GU1C1"> 1 </option>
                    <option value="GU1C2"> 2 </option>
                    <option value="GU1C3"> 3 </option>
                    <option value="GU1C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Bray Wanderers </td>
            <td> 08/07/2016 </td>
            <td><select name="BW1A">
                    <option value="BW1A--"> -- </option>
                    <option value="BW1A1"> 1 </option>
                    <option value="BW1A2"> 2 </option>
                    <option value="BW1A3"> 3 </option>
                    <option value="BW1A4"> 4 </option>
                </select></td>
            <td><select name="BW1S">
                    <option value="BW1S--"> -- </option>
                    <option value="BW1S1"> 1 </option>
                    <option value="BW1S2"> 2 </option>
                    <option value="BW1S3"> 3 </option>
                    <option value="BW1S4"> 4 </option>
                </select></td>
            <td><select name="BW1C">
                    <option value="BW1C--"> -- </option>
                    <option value="BW1C1"> 1 </option>
                    <option value="BW1C2"> 2 </option>
                    <option value="BW1C3"> 3 </option>
                    <option value="BW1C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Derry City </td>
            <td> 22/07/2016 </td>
            <td><select name="DC1A">
                    <option value="DC1A--"> -- </option>
                    <option value="DC1A1"> 1 </option>
                    <option value="DC1A2"> 2 </option>
                    <option value="DC1A3"> 3 </option>
                    <option value="DC1A4"> 4 </option>
                </select></td>
            <td><select name="DC1S">
                    <option value="DC1S--"> -- </option>
                    <option value="DC1S1"> 1 </option>
                    <option value="DC1S2"> 2 </option>
                    <option value="DC1S3"> 3 </option>
                    <option value="DC1S4"> 4 </option>
                </select></td>
            <td><select name="DC1C">
                    <option value="DC1C--"> -- </option>
                    <option value="DC1C1"> 1 </option>
                    <option value="DC1C2"> 2 </option>
                    <option value="DC1C3"> 3 </option>
                    <option value="DC1C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Finn Harps </td>
            <td> 05/08/2016 </td>
            <td><select name="FH1A">
                    <option value="FH1A--"> -- </option>
                    <option value="FH1A1"> 1 </option>
                    <option value="FH1A2"> 2 </option>
                    <option value="FH1A3"> 3 </option>
                    <option value="FH1A4"> 4 </option>
                </select></td>
            <td><select name="FH1S">
                    <option value="FH1S--"> -- </option>
                    <option value="FH1S1"> 1 </option>
                    <option value="FH1S2"> 2 </option>
                    <option value="FH1S3"> 3 </option>
                    <option value="FH1S4"> 4 </option>
                </select></td>
            <td><select name="FH1C">
                    <option value="FH1C--"> -- </option>
                    <option value="FH1C1"> 1 </option>
                    <option value="FH1C2"> 2 </option>
                    <option value="FH1C3"> 3 </option>
                    <option value="FH1C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Sligo Rovers </td>
            <td> 15/08/2016 </td>
            <td><select name="SLR2A">
                    <option value="SLR2A--"> -- </option>
                    <option value="SLR2A1"> 1 </option>
                    <option value="SLR2A2"> 2 </option>
                    <option value="SLR2A3"> 3 </option>
                    <option value="SLR2A4"> 4 </option>
                </select></td>
            <td><select name="SLR2S">
                    <option value="SLR2S--"> -- </option>
                    <option value="SLR2S1"> 1 </option>
                    <option value="SLR2S2"> 2 </option>
                    <option value="SLR2S3"> 3 </option>
                    <option value="SLR2S4"> 4 </option>
                </select></td>
            <td><select name="SLR2C">
                    <option value="SLR2C--"> -- </option>
                    <option value="SLR2C1"> 1 </option>
                    <option value="SLR2C2"> 2 </option>
                    <option value="SLR2C3"> 3 </option>
                    <option value="SLR2C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Wexford Youths </td>
            <td> 02/09/2016 </td>
            <td><select name="WY2A">
                    <option value="WY2A--"> -- </option>
                    <option value="WY2A1"> 1 </option>
                    <option value="WY2A2"> 2 </option>
                    <option value="WY2A3"> 3 </option>
                    <option value="WY2A4"> 4 </option>
                </select></td>
            <td><select name="WY2S">
                    <option value="WY2S--"> -- </option>
                    <option value="WY2S1"> 1 </option>
                    <option value="WY2S2"> 2 </option>
                    <option value="WY2S3"> 3 </option>
                    <option value="WY2S4"> 4 </option>
                </select></td>
            <td><select name="WY2C">
                    <option value="WY2C--"> -- </option>
                    <option value="WY2C1"> 1 </option>
                    <option value="WY2C2"> 2 </option>
                    <option value="WY2C3"> 3 </option>
                    <option value="WY2C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Longford Town </td>
            <td> 23/09/2016 </td>
            <td><select name="LT2A">
                    <option value="LT2A--"> -- </option>
                    <option value="LT2A1"> 1 </option>
                    <option value="LT2A2"> 2 </option>
                    <option value="LT2A3"> 3 </option>
                    <option value="LT2A4"> 4 </option>
                </select></td>
            <td><select name="LT2S">
                    <option value="LT2S--"> -- </option>
                    <option value="LT2S1"> 1 </option>
                    <option value="LT2S2"> 2 </option>
                    <option value="LT2S3"> 3 </option>
                    <option value="LT2S4"> 4 </option>
                </select></td>
            <td><select name="LT2C">
                    <option value="LT2C--"> -- </option>
                    <option value="LT2C1"> 1 </option>
                    <option value="LT2C2"> 2 </option>
                    <option value="LT2C3"> 3 </option>
                    <option value="LT2C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Shamrock Rovers </td>
            <td> 07/10/2016 </td>
            <td><select name="SHR2A">
                    <option value="SHR2A--"> -- </option>
                    <option value="SHR2A1"> 1 </option>
                    <option value="SHR2A2"> 2 </option>
                    <option value="SHR2A3"> 3 </option>
                    <option value="SHR2A4"> 4 </option>
                </select></td>
            <td><select name="SHR2S">
                    <option value="SHR2S--"> -- </option>
                    <option value="SHR2S1"> 1 </option>
                    <option value="SHR2S2"> 2 </option>
                    <option value="SHR2S3"> 3 </option>
                    <option value="SHR2S4"> 4 </option>
                </select></td>
            <td><select name="SHR2C">
                    <option value="SHR2C--"> -- </option>
                    <option value="SHR2C1"> 1 </option>
                    <option value="SHR2C2"> 2 </option>
                    <option value="SHR2C3"> 3 </option>
                    <option value="SHR2C4"> 4 </option>
                </select></td>
        </tr>

        <tr>
            <td> Dundalk </td>
            <td> 21/10/2016 </td>
            <td><select name="DD2A">
                    <option value="DD2A--"> -- </option>
                    <option value="DD2A1"> 1 </option>
                    <option value="DD2A2"> 2 </option>
                    <option value="DD2A3"> 3 </option>
                    <option value="DD2A4"> 4 </option>
                </select></td>
            <td><select name="DD2S">
                    <option value="DD2S--"> -- </option>
                    <option value="DD2S1"> 1 </option>
                    <option value="DD2S2"> 2 </option>
                    <option value="DD2S3"> 3 </option>
                    <option value="DD2S4"> 4 </option>
                </select></td>
            <td><select name="DD2C">
                    <option value="DD2C--"> -- </option>
                    <option value="DD2C1"> 1 </option>
                    <option value="DD2C2"> 2 </option>
                    <option value="DD2C3"> 3 </option>
                    <option value="DD2C4"> 4 </option>
                </select></td>
        </tr>


    </table>

    <br><br>

    <input type="submit" value="Add to Basket">

    </form>

<?php
require_once  __DIR__. '/../templates/footer.inc.php';