<?php
//Write a PHP class 'Rectangle' that has properties for length and width. Implement methods to calculate the rectangle's area and perimeter.

class Rectangle{
    private int $length = 0;
    private int $width = 0;
    public function __construct(int $length, int $width){
        $this->length = $length;
        $this->width = $width;
    }
    public function getArea(){
        return $this->length * $this->width;
    }
    public function getPerimeter(){
        return 2 * ($this->length + $this->width);
    }
}