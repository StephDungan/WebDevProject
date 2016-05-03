<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 18/03/2016
 * Time: 11:24
 */

require_once __DIR__ . '/../src/mainController.php';
require_once __DIR__ . '/../vendor/autoload.php';

session_start();

use Itb\MainController;

$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
$mainController = new MainController();
$pageHits = 0;

if('kits' == $action)
{
    kitsAction();
} elseif ('tickets' == $action)
{
    ticketsAction();
} elseif ('merchendise' == $action)
{
    merchendiseAction();
} elseif ('login' == $action)
{
    loginAction();
} else
{
    $mainController->indexAction();
}

if (isset($_SESSION['counter']))
{
    $pageHits = $_SESSION['counter'];
}
$pageHits++;
$_SESSION['counter'] = $pageHits;
print "<p>Counter (number of page hits): $pageHits</p>";

switch ($action)
{
    case 'logout':
        $mainController->logoutAction();
        break;
        
    case 'processLogin':
        $mainController->processLoginAction();
        break;

    default:
        $mainController->indexAction();
    
}

