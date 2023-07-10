<?php

class Square extends Rectangle {
    public function __construct($side) {
        parent::__construct($side, $side);
    }
}

$shapes = [new Circle(5), new Rectangle(3, 4), new Square(2)];
foreach ($shapes as $shape) {
    echo "Before resize - Type: " . get_class($shape) . ", Area: " . $shape->area() . "<br>";
    $scale_percent = rand(1, 100);
    $shape->resize($scale_percent);
    echo "After resize - Type: " . get_class($shape) . ", Area: " . $shape->area() . ", Scale percent: $scale_percent% <br><br>";
}
