<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Sam");
echo "Vie pour personnage: ".$humain->getVie()."<br><br>";

// Creation d'une instance de la classe dragon
$dragon = new dragon();
$dragon->setNom("SamSam");
echo "Vie pour dragon: ".$dragon->getVie()."<br><br>";

$princess = new princesse();
$princess->setNom("tsunade");
echo "Vie pour princesse: ".$princess->getVie()."<br>";
echo "nom de la princesse: ".$princess->getnom()."<br>";
