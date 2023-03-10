<?php

require_once 'personnage.php';
$merlin = new Personnage ("merlin","h",75);
//$merlin->leviosa();
$merlin->regenerer(5);

$garen = new Personnage ("harry","f",65);


$merlin->attaque($garen);

$merlin->couleurR();
$garen->couleurR();

$merlin->algoMati();
$garen->algoMati();

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