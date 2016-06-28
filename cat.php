<?php
class cat {
    public $name;
    protected $position;
    public function __construt($name){
        $this->name=$name;
        $this->position=['x'=>0,'y'=>0];
    }
    public function moveto($x,$y){
        $this->position['x']=$x;
        $this->position['y']=$y;
        return $this->$position;
    }
}

