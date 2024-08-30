<?php

class Dog extends Animal{
    public function eat(){
        echo "Dog is eating<br>";
    }
    public function makeSound(){
        echo "Dog is barking<br>";
    }
}

class Cat extends Animal{
    public function eat(){
        echo "Cat is eating<br>";
    }
    public function makeSound(){
        echo "Cat is meowing<br>";
    }
}
class Bird extends Animal{
    public function eat(){
        echo "Bird is eating<br>";
    }
    public function makeSound(){
        echo "Bird is chirping<br>";
    }
}