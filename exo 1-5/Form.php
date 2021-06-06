<?php 

class Form {
    protected $code;

    public function __construct($action)
    {
        $this->code = "<form action=$action method='post'>";
    }

    public function setText($name)
    {
        $this->code .=  "<input type=text name=$name>";
    }   
    
    public function setSubmit( $name, $value) 
    {
        $this->code .=  "<input type='submit' name=$name value=$value></form>";
    }

    public function showForm() 
    {
        echo $this->code;
    }
}