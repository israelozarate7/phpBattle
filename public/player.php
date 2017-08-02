<?php
/**
 * Created by PhpStorm.
 * User: izarate
 * Date: 01/08/2017
 * Time: 14:10
 */

class player
{
    const AVG_LIFE = 80;

    public $firstName = 'Israel';
    public $lastName = 'OZ';
    private $job = 'developer';


    function __construct($val)
    {

        $this->firstName = $val;
    }

    public function setFirstName ($newName)
    {
        $this->firstName = $newName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
}

class basketballPlayer extends player
{

}
