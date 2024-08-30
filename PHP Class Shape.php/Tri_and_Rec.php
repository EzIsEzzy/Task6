<?php

class Triangle extends Shape{
    function __construct($base,$height)
    {
        $this->base = $base;
        $this->height = $height;
    }
    public function calculateArea(){
        return ($this->height * $this->base)/2;
    }
}
class Rectangle extends Shape{
    function __construct($length,$width){
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea(){
        return $this->length * $this->width;
    }
}
