<?php
/*
 *  pulls header1.inc.php file into page
 * */
require_once __DIR__ . '/../../WebDevProject/templates/header1.inc.php';
?>
    <div class="main">
        <fieldset>
            <legend> Login </legend>
                <form action="/../WebDevProject/public/index.php?action=processLogin" method="post">
                    Customer ID :
                    <input type="text" name="username">
                    <br><br>
                    Password:
                    <input type="password" name="password">
                    <br><br>
                    <input type="submit" value="Login">
                </form>
        </fieldset>
     </div>



<?php
require_once  __DIR__. '/../../WebDevProject/templates/footer.inc.php';