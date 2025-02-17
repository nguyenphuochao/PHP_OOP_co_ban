<?php
abstract class Shape
{
    abstract protected function getArea();
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape
{
    private $width, $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
echo $circle->getArea(); // 78.539816339745
echo "<br>";
$rectangle = new Rectangle(10, 5);
echo $rectangle->getArea(); // 50