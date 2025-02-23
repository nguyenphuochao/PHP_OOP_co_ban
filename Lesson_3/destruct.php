<?php
class MyClass
{
    private $name;

    public function __construct()
    {
        echo "Object created. \n";
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __destruct()
    {
        echo "Object destroy. \n";
    }
}

echo '<pre>';

$object = new MyClass();
$object->setName("HaoNP");
echo $object->getName() . PHP_EOL;
