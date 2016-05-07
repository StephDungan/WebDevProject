<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 06/05/2016
 * Time: 16:44
 */

namespace Itb;

class User
{
    private $id;
    private $username;
    private $password;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $this->password = $hashedPassword;
    }
}