<?php 

class Ville {
    protected $nom;
    protected $département;

    public function __construct(string $nom, int $département)
    {
        $this->setNom($nom);
        $this->setDépartement($département);
    }
    public function getNom(): string {
        return $this->nom;
    }
    public function getDépartement(): int {
        return $this->département;
    }
    public function setNom( string $nom) {
         $this->nom=$nom;
    }
    public function setDépartement(int $département) {
         $this->département=$département;
    }
    public function showLocation(): string {
        return "<p>La ville de " . $this->nom . " est dans le " . $this->département . "</p>";
      }
}