<?php

class BankAccount {
    private $balance;
    private $accountNumber;

    public function __construct($initialBalance, $accountNumber) {
        $this->balance = $initialBalance;
        $this->accountNumber = $accountNumber;
    }

    // Getter method for balance
    public function getBalance() {
        return $this->balance;
    }

    // Setter method for balance with validation
    public function setBalance($newBalance) {
        if ($newBalance >= 0) {
            $this->balance = $newBalance;
        } else {
            echo "Invalid balance amount.\n";
        }
    }

    // Getter method for account number
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    // Method to deposit money
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposit successful. New balance: $" . $this->balance . "\n";
        } else {
            echo "Invalid deposit amount.\n";
        }
    }

    // Method to withdraw money
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawal successful. New balance: $" . $this->balance . "\n";
        } else {
            echo "Invalid withdrawal amount.\n";
        }
    }
}

// Creating an instance of BankAccount
$account = new BankAccount(1000, '123456789');

// Accessing private properties through getter methods
echo "Account Number: " . $account->getAccountNumber() . "\n";
echo "Initial Balance: $" . $account->getBalance() . "\n";

// Modifying the balance through setter method
$account->setBalance(1500);

// Depositing and withdrawing money
$account->deposit(500);
$account->withdraw(200);

// Attempting to modify balance directly (this will not work due to encapsulation)
// $account->balance = 2000;

?>
