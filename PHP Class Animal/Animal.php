<?php
//Write a PHP abstract class called 'Animal' with abstract methods like 'eat()' and 'makeSound()'. Create subclasses like 'Dog', 'Cat', and 'Bird' that implement these methods.

abstract class Animal{
    abstract public function eat();
    abstract public function makeSound();
}