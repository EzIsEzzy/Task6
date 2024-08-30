<?php
include 'Shape.php';
include 'Tri_and_Rec.php';

$triangle = new Triangle(5,20);
$triangle->calculateArea();
$triangle->getArea();

echo "<h3> The Triangle Area is equal to ". $triangle->getArea()."cm </h3>";

$rectangle = new Rectangle(5,5);
$rectangle->calculateArea();
$rectangle->getArea();

echo "<h3> The rectangle Area is equal to ". $rectangle->getArea()."cm </h3>";