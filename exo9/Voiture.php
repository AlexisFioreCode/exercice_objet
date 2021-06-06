<?php  

class Voiture extends Vehicule {
    
    protected $doors;

    const threedoors = 3 ; 
    const fivedoors = 5;

    public function __construct($data, $doors) {
        parent::__construct($data);
        $this->setDoors($doors);
    }

    public function setDoors($doors) {
        if(in_array($doors, [self::threedoors, self::fivedoors])) {
            $this->doors = $doors;
          }
    }
    public function getDoors() {
        return $this->doors;
    }

    }

?>