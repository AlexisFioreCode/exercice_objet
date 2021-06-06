<?php 

abstract class Person {
  protected  $nom;
  protected  $prenom;

  public function __construct(array $array) {
      $this->setNom($array["nom"]);
      $this->setPrenom($array["prenom"]);     
  } 
  
  public function setNom($nom) {
    $this->nom = $nom;
  }

  public function getNom() {
    return $this->nom;
  }

  public function setPrenom($prenom) {
    $this->prenom = $prenom;
  }

  public function getPrenom() {
    return $this->prenom;
  }
}

?>  