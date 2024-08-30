<?php

//Write a PHP interface called 'Resizable' with a method 'resize()'. Implement the 'Resizable' interface in a class called 'Square' and add functionality to resize the square.

class Square implements Resizable{
    private int $length =0;
    private int $width =0;
    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }
    public function getArea(){
        return $this->length * $this->width;
    }
    public function resize($newWidth, $newLength){
        $this->length = $newLength;
        $this->width = $newWidth;

        return $this->length * $this->width;
    }
}