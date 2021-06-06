<?php
require "Form.php";

class upgradedForm extends Form {

    public function __construct($action)
    {
        parent::__construct($action);
    }

    public function setRadio($name, $value) {
        $this->code .=  "<input type=radio name=$name value=$value> $value";
    }

    public function setCheckbox($name, $value) {
        $this->code .=  "<input type=checkbox name=$name value=$value> $value";
    }

}

?>