<?php
class Circle{
    public $radius;
    public $color;
    public function __construct($radius, $color) {
        $this ->radius = $radius;
        $this ->color = $color;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function getColor(){
        return $this->color;
    }
    public function setRadius($value){
        $this->radius = $value;
    }
    public function setColor($value){
        $this ->color = $value;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
}