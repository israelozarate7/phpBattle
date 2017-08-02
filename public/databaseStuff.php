<?php
/**
 * Created by PhpStorm.
 * User: izarate
 * Date: 01/08/2017
 * Time: 14:47
 */

$dbPass = "root";
$dbUser = "root";
$dbServer = "localhost";
$dbName = "scotchbox";


$connection = new PDO('mysql:host=' .$dbServer. ';dbname='.$dbName, $dbUser, $dbPass);
$query = "SELECT name, nicename FROM country ORDER BY nicename";
$resultObj = $connection->query($query);

if ($resultObj->rowCount() > 0)
{
    foreach ($resultObj as $singleRow)
    {
        echo 'country: ' . $singleRow['nicename'].PHP_EOL;

    }
}

