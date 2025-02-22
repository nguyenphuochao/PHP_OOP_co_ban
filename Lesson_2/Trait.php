<?php
trait Logger
{
    public function logger($message)
    {
        echo "Logger message " . $message . PHP_EOL;
    }
}

trait FileUpload
{
    public function upload($file)
    {
        echo "Uploading file" . $file . PHP_EOL;
    }
}

class User
{
    use Logger, FileUpload;

    public function createUser() {
        $this->logger("User created");
        $this->upload("avatar.jpg");
    }
}

echo '<pre>';

$user = new User();
$user->createUser();
