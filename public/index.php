<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 18/03/2016
 * Time: 11:24
 */

require_once __DIR__ . '/../src/mainController.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Itb\User;

define('name', 'Joe');
define('customerID', 'Joe101');
define('password' , 'pass1234');

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

$mainController = new MainController();

$hashedCorrectPassword = password_hash('SDungan', PASSWORD_DEFAULT);

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

if(('SDungan' == $customerID) && password_verify($password , $hashedCorrectPassword))
{
    $isLoggedIn == true;
}

switch ($action)
{
    case 'processLogin': $mainController->processLoginAction();
        break;
    
    default:
        $mainController->indexAction();
}