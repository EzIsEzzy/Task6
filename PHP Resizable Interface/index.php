<?php 

include 'Interface.php';
include 'Square.php';

$square = new Square(5,10);
echo "<h3> The Square area first will be ". $square->getArea() ."cm </h3>";

echo "<h3> Then the Square area will be ". $square->resize(6,11) ."cm </h3>";