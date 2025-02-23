<?php
class MyClass
{
    // Nếu gọi phương thức không tồn tại sẽ chạy tự chạy vào hàm __call
    public static function __callStatic($name, $arguments)
    {
        echo "Static Method '$name' called with arguments: " . implode(', ', $arguments) . "\n";
    }
}

MyClass::nonExistentStaticMethod('arg1', 'arg2');
