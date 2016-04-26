<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 18/03/2016
 * Time: 11:24
 */



require_once __DIR__ . '/../../WebDevProject/src/mainController.php';
require_once __DIR__ . '/../../WebDevProject/vendor/autoload.php';

use Itb\MainController;

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
    $mainController->indexAction();
}

switch ($action)
{
    case 'processLogin':
        $mainController->processLoginAction();
        break;

    default:
        $mainController->indexAction();
    
}