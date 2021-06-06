<?php 

class Client extends Person {
    protected $adresse;

    public function __construct(array $array) 
    {
        parent::__construct($array);
        $this->setAdresse($array["adresse"]);       
    }
    
    public function setAdresse(string $adresse) {
      $this->adresse = $adresse;
    }
  
    public function getAdresse() {
      return $this->adresse;
    }

    public function getCoord() {
        echo $this->nom . " " . $this->prenom . " habite au ". $this->adresse;
    }
}