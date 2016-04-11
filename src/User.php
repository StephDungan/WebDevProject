<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 07/04/2016
 * Time: 12:58
 */

namespace Itb;

class User
{
    private $id;
    private $customerID;
    private $password;

    public function getId()
    {
        return $this->id;
    }

    public function setPassword($password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $this->password = $password;
    }
}