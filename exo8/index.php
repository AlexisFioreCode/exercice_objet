<?php 
require "Person.php";
require "Client.php";
require "Electeur.php";

$array = [
    "nom" => "Fiorentino", 
    "prenom" => "Alexis", 
    "adresse" => "8 rte de collandres" 
];
$client = new Client($array);
$client->getCoord();

$array2 = [
    "nom" => "Belmondo", 
    "prenom" => "Jean-paul", 
    "bureau" => "Bureau des cloches" 
];
$electeur = new Electeur($array2);
$electeur->aVoter();
$electeur->aVoter();





?>