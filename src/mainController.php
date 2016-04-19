<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 02/04/2016
 * Time: 15:52
 */

namespace Itb;

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

class MainController
{
    public function indexAction()
    {
        require_once __DIR__ . '/../templates/index.php';
    }

    public function processLoginAction()
    {
        // default is bad login
        $isLoggedIn = false;

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if(('admin' == $username) & ('admin' == $password)){
            $isLoggedIn = true;

        }

        // action depending on login success
        if($isLoggedIn = true){
            // success - found a matching username and password
            require_once __DIR__ . '/../templates/loginSuccess.php';
        } else {
            $message = 'bad username or password, please try again';
            require_once __DIR__ . '/../templates/message.php';
        }
    }
}


