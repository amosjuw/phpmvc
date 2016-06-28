<?php
class Animal {
    public $animalType;
    protected $position;
    
    public function __construct() {
        $this->animalType=$animalType;
        $this->position=['x'=>0,'y'=>0];
    }
}


class cat extends Animal{
    public $name;
    public function __construct() {
        parent::__construct();
    }
}