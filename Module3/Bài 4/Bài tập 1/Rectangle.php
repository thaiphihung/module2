<?php
class Rectangle extends Shape implements Resizeable {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function area() {
        return $this->width * $this->height;
    }
    
    public function resize($scale_percent) {
        $this->width *= (1 + $scale_percent/100);
        $this->height *= (1 + $scale_percent/100);
    }
}
