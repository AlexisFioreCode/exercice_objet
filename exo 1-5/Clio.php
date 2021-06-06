<?php 


class Clio {
    protected $doors;
    protected $color ;
    protected static $price = 9000;

    const threedoors = 3 ; 
    const fivedoors = 5;
    const colors = [
        "red" => 123,
        "blue" => 987,
        "yellow"=> 547,
        "green" => 125,
        "brown" => 598,
        "white" => 874,
        "black" => 365,
        "purple" => 254,
         
    ];
    public function __construct($data)
    {
        foreach($data as $key =>$value) {
            $setter = "set" . ucfirst($key);
            if(method_exists( $this, $setter)) {
                $this->$setter($value);
            }
        }
    }

    public function setDoors(int $doors) {
        if(in_array($doors, [self::threedoors, self::fivedoors])) {
            $this->doors = $doors;
          }
    }

    public function getDoors()
    {
        return $this->doors;
    }

    public function setColor(int $color)
     {
        $this->color = $color;
    }
    
    public function getColor()
    {
        return $this->color;
    }
    public static function setPrice(int $price){
        self::$price = $price;
    }
    public static function getPrice() {
        return self::$price;
    }

}