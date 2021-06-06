<?php  

class Vehicule {

    protected $matricule;
    protected $color;

    public function __construct($data) {
        foreach($data as $key =>$value) {
            $setter = "set" . ucfirst($key);
            if(method_exists( $this, $setter)) {
                $this->$setter(htmlspecialchars($value));
            }
        }
    }

    public function setMatricule(string $matricule) {
        $this->matricule = $matricule;
    }

    public function getMatricule() {
        return $this->matricule;
    }

    public function setColor(string $color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

?>