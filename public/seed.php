<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 07/05/2016
 * Time: 16:27
 */

require_once __DIR__ . '/../../WebDevProject/vendor/autoload.php';

use Itb\User;

define('DB_HOST', 'localhost');
define('DB_USER', 'fred');
define('DB_PASS', 'smith');
define('DB_NAME', 'itb');

$matt = new User();
$matt->setUsername('matt');
$matt->setPassword('smith');
$matt->setRole(User::ROLE_USER);

$joe = new  User();
$joe->setUsername('joe');
$joe->setPassword('soap');
$joe->setRole(User::ROLE_ADMIN);

User::insert($matt);
User::insert($joe);

$users = User::getAll();
var_dump($users);
