<?php 

class Personne {
    protected $nom;
    protected $prenom;
    protected $adresse;

    public function __construct(array $array) 
    {
        $this->setNom($array["nom"]);
        $this->setPrenom($array["prenom"]);
        $this->setAdresse($array["adresse"]);
    }
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getAdresse() {
        return $this->adresse;
    }
    public function setNom($nom) {
         $this->nom = $nom;
    }
    public function setPrenom($prenom) {
         $this->prenom = $prenom;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
   }
   public function getCoord(){
       return $this->nom . " " . $this->prenom . " habite au ". $this->adresse;
   }
}