<?php
interface AnimalInterface
{
    public function sound();
    public function move();
}

class Cat implements AnimalInterface
{
    // cài đặt các phương thức của interface
    public function sound()
    {
        echo "meo meo" . PHP_EOL;
    }

    public function move()
    {
        echo "Cat is moving..." . PHP_EOL;
    }
}

echo '<pre>';

$cat = new Cat();
$cat->sound();
$cat->move();