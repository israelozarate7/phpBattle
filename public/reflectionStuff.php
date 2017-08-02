<?php
/**
 * Created by PhpStorm.
 * User: izarate
 * Date: 02/08/2017
 * Time: 09:28
 */

include 'player.php';

$player1 = new player('');

$reflectionClass = new ReflectionClass('player');
$reflectionProperty = $reflectionClass->getProperty('job');
$reflectionProperty->setAccessible(true);
$reflectionProperty->setValue($player1,'boss');

echo $reflectionProperty->getValue($player1);