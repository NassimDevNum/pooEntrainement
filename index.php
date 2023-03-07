<?php

require_once 'personnage.php';
$merlin = new Personnage ("merlin");
//$merlin->leviosa();
$merlin->regenerer(5);

$garen = new Personnage ("harry");


$merlin->attaque($garen);

if ($garen->mort() )
{
    echo "il est mort";
}
else
{
    echo "tjr vivant";
}

var_dump($garen);
var_dump($merlin);

?>