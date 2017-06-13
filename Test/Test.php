<?php

use PHPUnit\Framework\TestCase;
/**
 * Created by PhpStorm.
 * User: izarate
 * Date: 13/06/2017
 * Time: 10:28
 */
final class DummyTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }
}