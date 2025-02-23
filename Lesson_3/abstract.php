<?php
abstract class AnimalMoon
{
    // Phương thức trừu tượng, không có phần thân
    abstract public function sound();

    public function sleep()
    {
        echo "sleep...";
    }
}

class DogMoon extends AnimalMoon
{
    // Cài đặt phương thức trừu tượng
    public function sound()
    {
        echo "Gâu Gâu";
    }
}

$dog = new DogMoon();
$dog->sound(); // Output : Gâu Gâu
$dog->sleep(); // Output : sleep...
