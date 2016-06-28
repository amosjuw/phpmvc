<?php
class cat{
    protected $name;
    protected $position;
    public function __construt($name){
        $this->name=$name;
        $this->position=['x'=>0,'y'=>0];
    }
    public function moveto($x,$y){
        $this->position['x']=$x;
        $this->position['y']=$y;
        return $this->position;
    }
    public function move($x,$y){
        $this->position['x']+=$x;
        $this->position['y']+=$y;
//        return $this->position;
    }
    public function getAdd(){
        return $this->position;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
}
    $pet = new cat();
    $pet->setName("kitty");
    echo   $pet->getName();
    echo "<br>";
    $pet->moveto(3,5);
    $petAdd= $pet->getAdd();
    echo '{'.$petAdd['x'].','.$petAdd['y'].'}';
   

