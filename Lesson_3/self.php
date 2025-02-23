<?php
class MyClass
{
    public static $name = "MyClass";

    public static function getName()
    {
        return self::$name; // gọi thuộc tính tĩnh bên trong lớp
    }
}

echo MyClass::getName();
