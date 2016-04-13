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
        $isLoggedIn = $this->isLoggedInFromSession();
        $username = $this->usernameFromSession();

        require_once __DIR__ . '../templates/index.php';
    }

    public function loginAction()
    {
        $isLoggedIn = $this->isLoggedInFromSession();
        $username = $this->usernameFromSession();

        require_once __DIR__ . '../templates/login.php';
    }

    public function processLoginAction()
    {
        $isLoggedIn = false;

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $hashedCorrectPassword = password_hash('admin', PASSWORD_DEFAULT);

        $userRepository = new UserRepository();

        $isLoggedIn = $userRepository->canFindMatchingUsernameAndPassword($username, $password);

        $isLoggedIn = User::canFindMatchingUsernameAndPassword($username, $password);

        if (('admin' == $username) && password_verify($password, $hashedCorrectPassword))
        {
            $isLoggedIn = true;
        }
        if($isLoggedIn)
        {
            $_SESSION['user'] = $username;
            require_once __DIR__ . '../templates/loginSuccess.php';
        }
        else
        {
            $message = 'bad username or password';
            require_once __DIR__ . '../templates/message.php';
        }
    }

    public function isLoggedInFromSession()
    {
        $isLoggedIn = false;
        if (isset($_SESSION['user']))
        {
            $isLoggedIn = true;
        }

        return $isLoggedIn;
    }

    public function usernameFromSession()
    {
        $username = '';

        if (isset($_SESSION['user']))
        {
            $username = $_SESSION['user'];
        }

        return $username;
    }
}


