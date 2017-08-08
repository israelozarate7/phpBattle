<?php
/**
 * Created by PhpStorm.
 * User: izarate
 * Date: 02/08/2017
 * Time: 09:31
 */

include 'player.php';

$name = 'aaa';
$player1 = new basketballPlayer($name);

echo $player1->firstName;