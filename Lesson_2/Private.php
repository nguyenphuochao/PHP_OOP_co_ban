<?php
class BankAccount
{
    private $balance = 0;

    private function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function deposit($amount)
    {
        $this->setBalance($this->balance + $amount);
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
echo $account->getBalance(); // Output : 100
$account->setBalance(200); // Lỗi : không thể truy cập phương thức riêng tư từ bên ngoài
