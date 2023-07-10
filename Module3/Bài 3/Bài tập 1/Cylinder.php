<?php
class Cylinder extends Circle{
    public $height;
    public function __construct($radius,$color,$height)
    {
        parent::__construct($radius,$color);
        $this->height = $height;
    }
    public function calculateVolume(){
        return $this->height * ($this->radius * $this->radius) * pi();
    }
}