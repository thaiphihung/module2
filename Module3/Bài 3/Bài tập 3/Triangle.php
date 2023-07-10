<?php
class Triangle extends Shape{
    private $side1 = 1.0;
    private $side2 = 1.0;
    private $side3 = 1.0;
    public function __construct($side1, $side2, $side3,$height,$color){
        parent::__construct($height,$color);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function getSide1() {
        return $this->side1;
    }
    public function getSide2() {
        return $this->side2;
    }
    public function getSide3() {
        return $this->side3;
    }
    public function setSide1($value) {
        $this->side1 = $value;
    }
    public function setSide2($value) {
        $this->side2 = $value;
    }
    public function setSide3($value) {
        $this->side3 = $value;
    }
    public function getArea(){
       return ($this->side1 * $this->height) / 2;
    }
    public function getPerimeter(){
       return $this->side1 + $this->side2 + $this->side3;
    }
    public function toString(){
        return 'Đây là tam giác cân';
    }
}