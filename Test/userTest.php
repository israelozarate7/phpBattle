<?php
/**
 * Created by PhpStorm.
 * User: izarate
 * Date: 18/08/2017
 * Time: 13:27
 */

use PHPUnit\Framework\TestCase;
include '../public/user.php';
class userTest extends TestCase
{
    public function testSetPasswordRerturnsTrue()
    {
        $details = array();
        $user = new user($details);

        $password = 'israel';
        $result = $user->setPassword($password);

        $this->assertTrue($result);
    }

    public function testGetUserReturnsUserWithExpectedPass()
    {
        $details = array();
        $user = new user($details);
        $password = 'isr';
        $expectedEncrypPass = '3f8454b7f2c12cebb1622b6b0dfd1021';

        $user->setPassword($password);
        $currentUserPassword = $user->getUser();

        $this->assertEquals($expectedEncrypPass, $currentUserPassword['password']);
    }
}
