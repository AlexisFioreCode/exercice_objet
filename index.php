
<?php 
require "Ville.php";
require "Personne.php";
require "Form.php";
require "Clio.php";
echo " Exercice 1 et 2 <br>";

$ville = new Ville("Evreux", 27);
echo $ville->showLocation();
$array = [
    "nom" => "Fiorentino", 
    "prenom" => "Alexis", 
    "adresse" =>"8 rte de collandres" 
];
$personne = new Personne($array);
echo $personne->getCoord();

$form = new Form("");
$form->setText("name");
$form->setSubmit("form", "envoyer");
$form->showForm();

$clio = new Clio();
$clio->setDoors(5);
$clio->setColor("blue");
echo "La clio est de couleur ".$clio->getColor()." elle a ". $clio->getDoors() . "portes et coute " . $clio->getPrice() . "euros";