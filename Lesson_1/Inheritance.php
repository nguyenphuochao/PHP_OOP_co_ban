<?php
class Verhicle
{
    public $brand;

    public function honk()
    {
        echo "Honking! " . PHP_EOL;
    }
}

class Car extends Verhicle
{
    public $model;

    public function drive()
    {
        echo "Driving $this->brand $this->model" . PHP_EOL;
    }
}

class Motobike extends Verhicle
{
    public $seri;

    public function drive()
    {
        echo "Driving $this->brand $this->seri" . PHP_EOL;
    }
}

echo '<pre>';

$myCar3 = new Car();
$myCar3->brand = "Mec";
$myCar3->model = "c400";

$myCar3->honk(); // Output : Honking! 
$myCar3->drive(); // Output : Driving Mec c400
