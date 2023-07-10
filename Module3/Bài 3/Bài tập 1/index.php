<?php
include_once('Circle.php');
include_once('Cylinder.php');
$circle = new Circle(3,'red');
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
$cylinder = new Cylinder(3,'red',5);
echo 'Cylinder Volume: ' . $cylinder->calculateVolume() . "m³";