<?php
class Car
{
    // khai báo các thuộc tính
    public $brand;
    public $color;

    // định nghĩa phương thức
    public function drive()
    {
        echo "Driving $this->brand car" . PHP_EOL;
    }
}

echo '<pre>';

// tạo đối tượng
$myCar1 = new Car();
$myCar1->brand = "Toyota";
$myCar1->color = "Red";
$myCar1->drive(); // Ouput : Driving Toyota car

$myCar2 = new Car();
$myCar2->brand = "Mec";
$myCar2->color = "Black";
$myCar2->drive(); // Output : Driving Mec car
