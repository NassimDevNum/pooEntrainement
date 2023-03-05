<?php

require_once 'personnage.php';
$merlin = new Personnage ("merlin");
$merlin->leviosa();
$merlin->regenerer(5);

$garen = new Personnage ("harry",);

$garen -> vie = 0;
$garen -> mort();
$garen -> regenerer();


var_dump($merlin);
var_dump($garen);


?>