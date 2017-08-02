<?php
/**
 * Created by PhpStorm.
 * User: izarate
 * Date: 01/08/2017
 * Time: 13:20
 */
include 'player.php';


// --------------------------------
// -- Determine Types of Variables
// --------------------------------

$normalBool = true;
if (is_bool($normalBool))
{
    echo 'is boolean';
}
else
{
    echo 'not';
}

// --------------------------------
// -- Floating Point Numbers, aka Decimals, Real Numbers
// --------------------------------

$normalDecimal = 1.2364E4; //12364
$normalDecimal = 1.2364E-4; //0.00012364*/


// --------------------------------
// -- Returning Values
// --------------------------------

$player = new player('Israel');
$playerName = $player->getFirstName();
echo "The name of the player is {$playerName}";


// --------------------------------
// -- Creating & working with Arrays
// --------------------------------

$authors = array();
$authors = array(
    "Israel",
    "aaaaa",
    "asdas"
);

/*$authors = array(
    "Israel" => "basdaaaaaaooka",
    "aaaaa" => "boodsadaka",
    "asdas" => "booka"
);*/

array_push($authors, "Anna");

$lastValue = array_pop($authors);
echo $lastValue;


// --------------------------------
// -- Printing Arrays
// --------------------------------

$authors = array(
    "male" => array(
       "Israel" => array ("Bilbao", "London"),
       "Israel2" => array ("Bilbao", "London"),
    ),
    "female" => array(
        "Anna" => array ("Cluj", "NewYork"),
    )
);

print_r($authors);
print_r($authors["male"]["Israel2"]);
print count($authors, COUNT_RECURSIVE);



// --------------------------------
// -- Sorting Arrays
// --------------------------------

$authors = array("d"=>"Israel", "a"=>"Bogdan", "b"=>"Vlad", "c"=>"Oana");
ksort($authors);
foreach ($authors as $key => $val) {
    echo "$key = $val\n";
}

// --------------------------------
// -- If Statement
// --------------------------------

$count = count($authors);
/*if ($count > 0)
{

    echo 'i have authors';
}
else
{
    echo 'I dont have';

}*/

$outcome = ($count > 0) ? "I've " . $count . " Authors" : "No authors";
echo $outcome;











