<?php 
class MyClass
{
    // Nếu gọi phương thức không tồn tại sẽ chạy tự chạy vào hàm __call
    public function __call($name, $arguments)
    {
        echo "Method '$name' called with arguments: " . implode(', ', $arguments) . "\n";
    }
}

$object = new  MyClass();
$object->nonExistentMethod('arg1', 'arg2');