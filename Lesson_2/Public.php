<?php 
class Car
{
    public $brand = "Toyota";

    public function showBrand() {
        return $this->brand;
    }
}

$car = new Car();
echo $car->brand; // Output : Toyota
echo $car->showBrand();