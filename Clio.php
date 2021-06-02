<?php 


class Clio {
    protected $doors;
    protected $color ;
    protected static $price = 9000;

    const threedoors = 3 ; 
    const fivedoors = 5;
    const colors = [
        "red" => 123456,
        "blue" => 987654,
        "yellow"=> 547869,
        "green" => 125489,
        "brown" => 598763,
        "white" => 874589,
        "black" => 365874,
        "purple" => 254896,
         
    ];
    public function __construct()
    {
        $this->setDoors(self::threedoors,self::fivedoors);
        $this->setColor();
        $this->setPrice();
    }

    public function setDoors(int $doors) {
        $this->doors = $doors;
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