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
    require_once __DIR__ . '/../../WebDevProject/templates/kits.php';
}

function ticketsAction()
{
    $pageTitle = 'TICKETS';
    require_once __DIR__. '/../../WebDevProject/templates/tickets.php';
}

function merchendiseAction()
{
    $pageTitle = 'MERCHENDISE';
    require_once  __DIR__. '/../../WebDevProject/templates/merchendise.php';
}

function loginAction()
{
    $pageTitle = 'LOGIN';
    require_once  __DIR__. '/../../WebDevProject/templates/login.php';
}

function indexAction()
{
    $pageTitle = 'HOME';
    require_once  __DIR__. '/../../WebDevProject/templates/index.php';
}

class MainController
{
    public function indexAction()
    {
        require_once __DIR__ . '/../../WebDevProject/templates/index.php';
    }

    public function processLoginAction()
    {
        // default is bad login
        $isLoggedIn = false;

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $hashedCorrectPassword = password_hash('admin', PASSWORD_DEFAULT);
        
        if(('admin' == $username) && password_verify($password, $hashedCorrectPassword)){
            $isLoggedIn = true;
        }

        // action depending on login success
        if($isLoggedIn){
            // success - found a matching username and password
            require_once __DIR__ . '/../../WebDevProject/templates/loginSuccess.php';
        } else {
            require_once __DIR__ . '/../../WebDevProject/templates/login.php';
        }
    }
    
}


