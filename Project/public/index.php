<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 18/03/2016
 * Time: 11:24
 */

require_once __DIR__ . '/../src/mainController.php';

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

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