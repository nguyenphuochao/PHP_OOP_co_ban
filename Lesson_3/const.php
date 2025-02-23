<?php
class MyClass
{
    const PI = 3.14;

    public function getPi()
    {
        return self::PI; // gọi hằng số
    }
}

$myclass = new MyClass();
echo $myclass->getPi();
