<?php

require_once('class_poo.php');

$player1 = new player('Jimmy', '100', '500', '50', '150');
$oppenant1 = new player('troll', '100', '300', '50', '200');
$oppenant2 = new player('orc', '100', '600', '50', '100');

echo "joueur 1 <br>";
$healthPlayer1 = $player1->getHealth();
echo $healthPlayer1;



//$player1->getStrenght();
//$player1->getAgility();
//$player1->getSpeed();

//$film1 ->annonce();

//$healthPlayer1 = $player1-> getNomFilm();
//$healthOppenant1 = $oppenant1-> getNomFilm();
//$viejoueur = $player1-> getNomFilm();






?>