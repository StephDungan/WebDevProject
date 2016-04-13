<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 13/04/2016
 * Time: 12:35
 */

class UserRepository
{
    private $users = [];

    public function __construct()
    {
        $matt = new \Itb\User();
        $matt->setId(1);
        $matt->setUsername('matt');
        $matt->setPassword('smith');
        $matt->setRole(\Itb\User::ROLE_USER);

        $admin = new \Itb\User();
        $admin->setId(2);
        $admin->setUsername('admin');
        $admin->setPassword('admin');
        $admin->setRole(\Itb\User::ROLE_ADMIN);

        $this->users[1] = $matt;
        $this->users[2] = $admin;
    }

    public function getALL()
    {
        return $this->users;
    }

    public function getOneById($id)
    {
        if($id == 1 || $id == 2)
        {
            return $this->users[$id];
        }
        else
        {
            return null;
        }
    }

    public function getOneByUsername($username)
    {
        foreach ($this->users as $user)
        {
            if($user->getUsername() == $username)
            {
                return $user;
            }
        }

        return null;
    }

    public function canFindMAtchingUsernamdAndPassword($username, $password)
    {
        $user = $this->getOneByUsername($username);

        if(null == $user)
        {
            return false;
        }

        $hashedStoredPassword = $user->getPassword();

        return password_verify($password, $hashedStoredPassword);
    }
}