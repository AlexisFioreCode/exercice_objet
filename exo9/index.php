<?php  

require "Vehicule.php";
require "./Voiture.php";
require "./Bus.php";

$arrayV = [
    "matricule" => "324 PXE 76",
    "color" => "white",
];

$arrayB = [
    "matricule" => "487 RSA 27",
    "color" => "red",
];

$voiture = new Voiture($arrayV , Voiture::fivedoors);
echo "<p>La première voiture a pour matricule " . $voiture->getMatricule() .  " à une couleur " . $voiture->getColor()
 . " et a  " . $voiture->getDoors() . " portes</p>";

$bus = new Bus($arrayB, Bus::onefloor);
echo "<p>Le premier bus a pour matricule " . $bus->getMatricule() .  " à une couleur " . $bus->getColor()
 . " et a  " . $bus->getFloor() . " étages</p>"; 

$voiture->setColor("gris");
$bus->setFloor(2);

echo "<p>" . $voiture->getColor() . "</p>";
echo "<p>" . $bus->getFloor() . "</p>";
?>