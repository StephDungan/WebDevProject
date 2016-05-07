<?php
/**
 * Created by PhpStorm.
 * User: Steph
 * Date: 06/05/2016
 * Time: 16:47
 */

namespace Itb;

class UserRepository
{
    private $users = [];

    public function __construct()
    {
        $john = new User();
        $john->setId(1);
        $john->setUsername('john');
        $john->setPassword('doe');

        $jane = new User();
        $jane->setId(2);
        $jane->setUsername('jane');
        $jane->setPassword('bloggs');

        $this->users[1] = $john;
        $this->users[2] = $jane;
    }

    public function getAll()
    {
        return $this->users;
    }

    public function getOneById($id)
    {
        if($id == 1 || $id == 2)
        {
            return $this->users[$id];
        } else {
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
    
    public function canFindMatchingUsernameAndPassword($username, $password)
    {
        $user = $this->getOneByUsername($username);
        
        if(null == $user){
            return false;
        }
        
        $hashedStoredPassword = $user->getPassword();
        
        return password_verify($password, $hashedStoredPassword);
    }
}