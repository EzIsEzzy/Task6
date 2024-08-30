<?php
include 'Animal.php';
include 'Dog_and_cat_and_bird.php';

$cat = new Cat();
$cat->eat();
$cat->makeSound();

$dog = new Dog();
$dog->eat();
$dog->makeSound();

$bird = new Bird();
$bird->eat();
$bird->makeSound();