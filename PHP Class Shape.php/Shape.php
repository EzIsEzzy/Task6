<?php
//Write a PHP class called 'Shape' with an abstract method 'calculateArea()'. Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.

abstract class Shape{
    protected int $base = 0;
    protected int $height = 0;
    protected int $length = 0;
    protected int $width = 0;
    protected abstract function calculateArea();

    public function getArea()
    {
        return $this->calculateArea();
    }
}