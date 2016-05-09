<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 02/04/2016
 * Time: 15:52
 */

namespace Itb;


/**
    sets $pageTitle and directs server to the correct page when method is called
 **/
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
function merchandiseAction()
{
    $pageTitle = 'MERCHANDISE';
    require_once  __DIR__. '/../../WebDevProject/templates/merchandise.php';
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
function infoAction()
{
    $pageTitle = 'INFO';
    require_once __DIR__ . '/../../WebDevProject/templates/info.php';
}

/*
 *  sets page title and uses an if else statement to direct the server
 *  to the correct page depending on the login in details provided *
 * */
function processLoginAction()
{
    $pageTitle = 'WELCOME';
    $accountLinkStyle = 'current_page';

    if ( ($username = 'admin') & password_verify($password, $hashedCorrectPassword))
    {
        require_once __DIR__ . '/../../WebDevProject/templates/admin.php';
    } elseif (( $username = 'Steph') & ( $password = 'bohs')){
        require_once  __DIR__ . '/../../WebDevProject/templates/loginSuccess.php';
    } else {
        require_once __DIR__ . '/../../WebDevProject/templates/login.php';
    }
}

class MainController
{
    public function loginAction()
    {
        require_once __DIR__ . '/../../WebDevProject/templates/login.php';
    }
    
    public function kitsAction()
    {
        require_once __DIR__ . '/../../WebDevProject/templates/kits.php';
    }

    public function ticketsAction()
    {
        require_once __DIR__ . '/../../WebDevProject/templates/tickets.php';
    }

    public function merchandiseAction()
    {
        require_once __DIR__ . '/../../WebDevProject/templates/merchandise.php';
    }

    public function infoAction()
    {
        require_once __DIR__ . '/../../WebDevProject/templates/info.php';
    }
    
    public function indexAction()
    {
        $isLoggedIn = $this->isLoggedInFromSession();
        $username = $this->usernameFromSession();

        require_once __DIR__ . '/../../WebDevProject/templates/index.php';
    }

    public function processLoginAction()
    {
        // default is bad login
        $isLoggedIn = false;

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        /*
         *  hashes the stored passwords so they are scrambled if accessed by outside source
         * */
        $hashedCorrectPassword = password_hash('admin', PASSWORD_DEFAULT);

        /* search for user with username in repository
        $userR = new UserR();
        $isLoggedIn = $userR->canFindMatchingUsernameAndPassword($username, $password);
        */
        
        
        /*
         *  hard codes login details into the website
         *  if either combination is entered, the user is logged in
         *
         *  matches the admin password to the hashed version instead of the woth 'admin'
         *  hard codes login details for user 'Steph' into the website
         **/
        if(('admin' == $username) && password_verify($password, $hashedCorrectPassword))
        {
            $isLoggedIn = true;
        }elseif (('Steph' == $username) && ('bohs' == $password))
        {
            $isLoggedIn = true;
        }

        /*
         * if else statements determining what should happen depending on wether the login in is true
         * */
        if($isLoggedIn == true)
        {
            /*
             *  if login is true
             * */
            if($username == 'admin'){
                /*
                 *  if the username is admin go to
                 *      /../../WebDevProject/templates/admin.php
                 * */
                require_once __DIR__ . '/../../WebDevProject/templates/admin.php';
            } else {
                /*
                 *  else go to
                 *      /../../WebDevProject/templates/loginSuccess.php
                 * */
                require_once __DIR__ . '/../../WebDevProject/templates/loginSuccess.php';
            }
        } else {
            /*
             *  if login is not true go to
             *      /../../WebDevProject/templates/login.php
             * */
            require_once __DIR__ . '/../../WebDevProject/templates/login.php';
        }
    }

    public function newHit()
    {
        $pageHits = 0;

        if (isset($_SESSION['counter'])){
            $pageHits = $_SESSION['counter'];
        }

        $pageHits++;
        $_SESSION['counter'] = $pageHits;
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


