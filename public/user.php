<?php
/**
 * Created by PhpStorm.
 * User: izarate
 * Date: 18/08/2017
 * Time: 13:22
 */

class user
{
    const MIN_PASS_LEN = 4;
    private  $user = array();

    public function __construct(array $user)
    {
        $this->user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setPassword($password)
    {
        if(strlen($password) < self::MIN_PASS_LEN)
        {
            return false;
        }

        $this->user['password'] = $this->encryptPass($password);
        return true;
    }

    private function encryptPass ($password)
    {
        return md5($password);
    }
}