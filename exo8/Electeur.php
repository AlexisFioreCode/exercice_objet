<?php 

class Electeur extends Person {
    protected $bureau;
    protected $vote;

    function __construct(array $array)
  {
    $this->vote = false;
    parent::__construct($array);
    $this->setBureau($array["bureau"]);
  }

    public function setBureau(string $bureau) {
        $this->bureau = $bureau;
      }
    
    public function getBureau() {
      return $this->bureau;
    }
  
    public function setVote($vote) {
      $this->vote = $vote;
    }
  
    public function getVote(){
      return $this->vote;
    }
    public function aVoter() {
      if($this->vote) {
          echo "t'a déja voté mec";
      } else {
          $this->vote = true;
          echo "<p>" . $this->nom . " " . $this->prenom . " a voté au bureau " . $this->bureau . "</p>";
      }          
    }
}

?>