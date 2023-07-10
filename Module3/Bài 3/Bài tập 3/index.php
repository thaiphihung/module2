<?php
include_once('Shape.php');
include_once('Triangle.php');
$triangle = new Triangle(3,3,3,5,'Đen');
echo 'Màu của tam giác là màu: '. $triangle->getColor() . '<br/>';
echo 'Diện tích của hình tam giác là: ' . $triangle->getArea() . '<br/>';
echo 'Chu vi của hình tam giác là :' . $triangle->getPerimeter() . '<br/>';