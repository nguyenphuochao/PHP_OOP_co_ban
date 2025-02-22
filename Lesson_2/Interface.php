<?php
interface Animal
{
    public function makeSound();
}

interface Movable
{
    public function move();
}

class Dog implements Animal, Movable
{
    public function makeSound()
    {
        echo "Gâu Gâu";
    }

    public function move()
    {
        echo "4 chân";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output : Gâu Gâu
$dog->move(); // Output : 4 chân
