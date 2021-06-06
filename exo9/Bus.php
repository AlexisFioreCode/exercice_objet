<?php  

class Bus extends Vehicule {
    
    protected $floor;

    const onefloor = 1;
    const twofloor = 2;

    public function __construct($data, $floor) {
        parent::__construct($data);
        $this->setFloor($floor);
    }

    public function setFloor(int $floor) {
        if (in_array($floor , [self::onefloor , self::twofloor] )) {
            $this->floor = $floor;
        }
    }

    public function getFloor() {
        return $this->floor;
    }

}

?>