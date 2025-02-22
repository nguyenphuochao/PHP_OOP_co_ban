<?php
// Khai báo lớp trừu tường (abstract) thì bắt buộc ít nhất phải có 1 phương thức trừu tượng chưa dược định nghĩa
// Lớp kế thừa (lớp con) bắt buộc phải được định nghĩa phương thức trừu tượng từ lớp cha

abstract class Animal
{
    abstract public function makeSound(); // không cần định nghĩa hàm bên trong vì là abstract

    public function eat()
    {
        echo "eating";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Gaw gaw";
    }
}

$dog = new Dog();
$dog->eat();
$dog->makeSound();
