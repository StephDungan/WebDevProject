<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 18/03/2016
 * Time: 11:24
 */

session_start();

require_once __DIR__ . '/../src/mainController.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Itb\MainController;

define('DB_HOST','localhost');
define('DB_USER', 'fred');
define('DB_PASS', 'smith');
define('DB_NAME', 'itb');

$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
$mainController = new MainController();

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
    indexAction();
}

switch ($action)
{
    case 'processLogin':
        $mainController->processLoginAction();
        break;

    default:
        $mainController->indexAction();
    
}