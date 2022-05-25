<?php

class Movie {
    public $name;
    public $age;

    function __construct(String $name,String $anno){
        $this->age = $anno;
        $this->name = $name;
    }

    public function getName(){
        return $this->name.' '.$this->age;
    }
};

$batman = new Movie('batman','2002');
$result = $batman->getName();
echo $result;

?>