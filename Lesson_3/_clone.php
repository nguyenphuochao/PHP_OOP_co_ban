<?php
class MyClass
{
    public function __construct(public $name) {}

    public function __clone()
    {
        echo "Object cloned. Original name : " . $this->name . "\n";
    }
}

echo '<pre>';

$object1 = new MyClass("HaoNP");
$object2 = clone $object1;

var_dump($object1);
var_dump($object2);
