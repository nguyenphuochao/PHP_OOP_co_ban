<?php
class Vehicle
{
    protected $brand = "Toyota";

    protected function showBrand()
    {
        echo $this->brand;
    }
}

class Car extends Vehicle
{
    public function display()
    {
        $this->showBrand(); // hợp lệ
    }
}

$car = new Car();
$car->display(); // Output : Toyota
$car->brand; // Lỗi : không thể truy cập thuộc tính được bảo vệ từ bên ngoài
