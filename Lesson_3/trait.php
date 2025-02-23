<?php
trait Logger
{
    public function log($message)
    {
        echo "Logging message : $message" . PHP_EOL;
    }
}

class User
{
    use Logger; // sử dụng trait Logger

    public function createUser()
    {
        $this->log("User created!");
    }
}

class Order
{
    use Logger; // sử dụng lại trait Logger

    public function addOrder()
    {
        $this->log("Order added");
    }
}

echo '<pre>';

$user = new User();
$user->createUser();

$order = new Order();
$order->addOrder();
