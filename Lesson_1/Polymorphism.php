<?php
class Animal
{
    public function sound()
    {
        echo "Animal sound" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function sound()
    {
        echo "Gau gau" .PHP_EOL;
    }
}

class Cat extends Animal
{
    public function sound()
    {
        echo "Mew Mew" .PHP_EOL;
    }
}

echo '<pre>';

$dog = new Dog();
$dog->sound(); // Gau gau

$cat = new Cat();
$cat->sound(); // Mew Mew
