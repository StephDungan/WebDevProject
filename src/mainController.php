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

class MainController
{
    public function indexAction()
    {
        require_once __DIR__ . '../templates/login.php';
    }
    
    public function processLoginAction()
    {
        $isLoggedIn = false;
        $customerID = filter_input(INPUT_POST, 'customerID', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        
        $userRepository = new UserRepository();
        $isLoggedIn = $userRepository->CanFindMacthingUsernameAndPassword($customerID, $password);
        
        if(('admin' == $customerID) & ('admin' == $password))
        {
            $isLoggedIn == true;
        }
        
        if($isLoggedIn)
        {
            require_once __DIR__ . '../templates/loginSuccess.php';
        } else 
        {
            $message = 'Bad username or password, please try again';
            require_once __DIR__ . '../templates/message.php';
        }
    }
}
