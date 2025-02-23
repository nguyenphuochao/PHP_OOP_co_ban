<?php 
class ParentClass
{
    public function greet() {
        echo "Hello from ParentClass";
    }
}

class ChildClass extends ParentClass
{
    // ghi đè phương thức của lớp cha
    public function greet()
    {
        echo "Hello from ChildClass";
    }
}

$childclass = new ChildClass();
$childclass->greet();