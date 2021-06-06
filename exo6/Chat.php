<?php 

class Chat {

    protected int $id;
    protected string $nom;
    protected int $age;
    protected string $sex;
    protected string $color;

    const SEX = ["female","male"];
    const COLORS = ["white","grey","black","beige"];

    public function __construct(?array $data=null) {
        if($data) {
            foreach($data as $key =>$value) {
                $setter = "set" . ucfirst($key);
                if(method_exists( $this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
        
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getID(){
        return $this->id;
    }

    public function setNom(string $nom) {
        if(strlen($nom) <=15 ) {
            $this->nom = $nom;
        }
    }

    public function getNom() {
        return $this->nom;
    }

    public function setAge(int $age) {
        if($age > 0 && $age < 30) {
            $this->age =$age;
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function setSex(string $sex) {
        if(in_array($sex, self::SEX)) {
            $this->sex = $sex;
        }
    }

    public function getSex(){
        return $this->sex;
    }

    public function setColor(string $color) {
        if(in_array($color, self::COLORS)) {
            $this->color = $color;
          }
    }

    public function getColor() {
        return $this->color;
    }

    public function Miaou() {
        echo "<p> Je suis ".$this->nom. " j'ai " .$this->age . " ans , je suis de sexe " .$this->sex. " et de couleur ".$this->color. " </p>";
    }
}
    
?>