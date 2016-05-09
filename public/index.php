<?php
/*
 *  pulls in the required files to make the index.php from controller work
 * */

require_once __DIR__ . '/../../WebDevProject/src/mainController.php';
require_once __DIR__ . '/../../WebDevProject/vendor/autoload.php';

require_once __DIR__ . '/../../WebDevProject/app/setup.php';


/*
 * starts session
 * */
session_start();

/*
 *  use this class
 * */
use Itb\MainController;


/*
 *  processes the action strings
 *  creates a new instance of the MainController class
 *  counts page visits
 * */
$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
$mainController = new MainController();
$pageHits = 0;

/*
 *  ifelse statements to determine with functions should be 
 *  called depending on which sting is activated
 * */
if('kits' == $action)
{
    \Itb\kitsAction();
} elseif ('tickets' == $action)
{
    \Itb\ticketsAction();
} elseif ('merchandise' == $action)
{
    \Itb\merchandiseAction();
} elseif ('login' == $action)
{
    \Itb\merchandiseAction();
} elseif ('index' == $action)
{
    \Itb\loginAction();
} elseif ('info' == $action)
{
    \Itb\infoAction();
}

/*
 * processes session counter
 * */
if (isset($_SESSION['counter']))
{
    $pageHits = $_SESSION['counter'];
}
$pageHits++;
$_SESSION['counter'] = $pageHits;


/*
 *  switch for process login to determine which action should be taken
 *  when login information is entered
 * */
switch ($action)
{
    case 'processLogin':
        $mainController->processLoginAction();
        break;

    default:
        $mainController->indexAction();
    
}

