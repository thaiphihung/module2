<?php
interface Resizeable {
    public function resize($scale_percent);
}
class Circle extends Shape implements Resizeable {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function area() {
        return 3.14 * $this->radius ** 2;
    }
    
    public function resize($scale_percent) {
        $this->radius *= (1 + $scale_percent/100);
    }
}
