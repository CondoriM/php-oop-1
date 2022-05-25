<?php

class Movie {
    public $name;
    public $age;

    function __construct($anno){
        $this->age = $anno;
    }
}

$batman = new Movie(2002);

?>