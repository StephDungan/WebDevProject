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

function submitAction()
{
    $pageTitle = 'BASKET';
    require_once __DIR__ . '/../../WebDevProject/templates/basket.php';
}

class MainController
{
    public function indexAction()
    {
        $isLoggedIn = $this->isLoggedInFromSession();
        $username = $this->usernameFromSession();
        
        require_once __DIR__ . '/../templates/index.php';
    }
    
    public function loginAction()
    {
        $isLoggedIn = $this->isLoggedInFromSession();
        $username = $this->usernameFromSession();
        
        require_once __DIR__ . '/../../WebDevProject/templates/login.php';
    }

    public function submitAction()
    {
        $submitPressed = $this->hadSubmitted();
    }
    
    public function logoutAction()
    {
        unset($_SESSION['user']);
        
        $this->indexAction();
    }

    public function processLoginAction()
    {
        // default is bad login
        $isLoggedIn = false;

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if(('admin' == $username) & ('admin' == $password))
        {
            $isLoggedIn = true;
        }elseif (('Steph' == $username) &('bohs' == $password))
        {
            $isLoggedIn = true;
        }

        // action depending on login success
        if($isLoggedIn = true){
            
            $_SESSION['user'] = $username;
            // success - found a matching username and password
            require_once __DIR__ . '/../../WebDevProject/templates/loginSuccess.php';
        } else {
            require_once __DIR__ . '/../../WebDevProject/templates/login.php';
        }
    }

    public function processSubmitAction()
    {
        $submitPressed = true;

        if ($submitPressed = true)
        {
            require_once __DIR__ . '/../../WebDevProject/templates/basket.php';
        } else {
            require_once __DIR__ . '/../../WebDevProject/templates/index.php';
        }

    }

    public function killSession()
    {
        $_SESSION = [];

        if (ini_get('session.use_cookies'))
        {
            $params = session_get_cookie_params();
            setcookie( session_name(), '', time() - 42000,
                $params['path'], $params['domain'],
                $params['secure'], $params['httponly']);
        }

        session_destroy();
    }

    public function forgetSession()
    {
        $this->killSession();

        print 'SESSION has been destroyed - all session data deleted';
        print '<p><a href="/"> back to home page</a>';
    }

    public function newHit()
    {
        $pageHits=0;
        if (isset($_SESSION['counter']))
        {
            $pageHits = $_SESSION['counter'];
        }

        $pageHits++;
        $_SESSION['counter']=$pageHits;

        print "<p>Counter (number of page hits): $pageHits";
        print '<p>session = ' . session_id();
        print '<hr><a href="/">revist this home page again</a> ';
        print '<hr><a href="/../WebDevProject/public/index.php?action=restartSession">restart session</a> ';

    }
    
    public function isLoggedInFromSession()
    {
        $isLoggedIn = false;
        
        if (isset($_SESSION['user'])){
            $isLoggedIn = true;
        }
        
        return $isLoggedIn;
    }
    
    public function usernameFromSession()
    {
        $username = '';
        
        if (isset($_SESSION['user'])){
            $username = $_SESSION['user'];
        }
        
        return $username;
    }
}


