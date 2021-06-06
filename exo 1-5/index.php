
<?php 
require "Ville.php";
require "Personne.php";
require "Clio.php";
require "upgradedForm.php";


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

$clio = new Clio(["doors" => Clio::fivedoors, "color" => Clio::colors["yellow"]]);
$clio2 = new Clio (["doors" => Clio::threedoors, "color" => Clio::colors["red"]]);
$clio3 = new Clio (["doors" => Clio::threedoors, "color" => Clio::colors["yellow"]]);

echo "<p>Clio1 à la couleur numéro " . $clio->getColor() . "</p>";
echo "<p>et elle coute " . $clio->getPrice() . " €</p>";

echo "<p>Clio2 à la couleur numéro " . $clio2->getColor() . "</p>";
echo "<p>et elle coute " . $clio2->getPrice() . " €</p>";

echo "<p>Clio3 à la couleur numéro " . $clio3->getColor() . "</p>";
echo "<p>et elle coute " . $clio3->getPrice() . " €</p>";

Clio::setPrice(8000);

echo "<p>Maintenant elle coute " . $clio->getPrice() . " €</p>";

echo "<p>Maintenant elle coute " . $clio2->getPrice() . " €</p>";

echo "<p>Maintenant elle coute " . $clio3->getPrice() . " €</p>";

$upgradeForm = new upgradedForm("");
$upgradeForm->setText("name");
$upgradeForm->setRadio("radio", "salut");
$upgradeForm->setCheckbox("checkbox","Bonjour");
$upgradeForm->setSubmit("form", "envoyer");
$upgradeForm->showForm();