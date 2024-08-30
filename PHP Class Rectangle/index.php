<?php

include 'Rectangle.php';

$rectangle = new Rectangle(10,10);

echo '<h3> The area for this rectangle is = ' . $rectangle->getArea() . 'cm </h3>';

echo '<h3> But its perimeter will be = ' . $rectangle->getPerimeter() . 'cm </h3>';