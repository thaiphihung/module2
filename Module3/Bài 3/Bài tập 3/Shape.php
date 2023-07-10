<?php
class Shape{
    public  $height;
    public $color;
    public function __construct($height,$color) {
        $this ->height = $height;
        $this ->color = $color;
    }
    public function getHeight(){
        return $this->height;
    }
    public function getColor(){
        return $this->color;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    public function setColor($color){
        $this->color = $color;
    }
}