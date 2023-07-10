<?php
include_once('Shape.php');
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Circle(5);
$rectangle = new Rectangle(3, 4);
$square = new Square(2);

echo "Before resize - Type: " . get_class($circle) . ", Area: " . $circle->area() . "<br>";
$circle->resize(50);
echo "After resize - Type: " . get_class($circle) . ", Area: " . $circle->area() . "<br><br>";

echo "Before resize - Type: " . get_class($rectangle) . ", Area: " . $rectangle->area() . "<br>";
$rectangle->resize(25);
echo "After resize - Type: " . get_class($rectangle) . ", Area: " . $rectangle->area() . "<br><br>";

echo "Before resize - Type: " . get_class($square) . ", Area: " . $square->area() . "<br>";
$square->resize(75);
echo "After resize - Type: " . get_class($square) . ", Area: " . $square->area() . "<br><br>";