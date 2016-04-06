<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 02/04/2016
 * Time: 15:52
 */

function kitsAction()
{
    $pageTitle = 'KITS';
    require_once __DIR__ . '/../templates/kits.php';
}

function ticketsAction()
{
    $pageTitle = 'TICKETS';
    require_once __DIR__. '/../templates/tickets.php';
}

function merchendiseAction()
{
    $pageTitle = 'MERCHENDISE';
    require_once  __DIR__. '/../templates/merchendise.php';
}

function loginAction()
{
    $pageTitle = 'LOGIN';
    require_once  __DIR__. '/../templates/login.php';
}

function indexAction()
{
    $pageTitle = 'HOME';
    require_once  __DIR__. '/../templates/index.php';
}
