<?php

/**
 * Bank Account demo class.
 *
 */
class BankAccount
{
    var $customerName;
    var $balance;
    var $frozen;


    function __construct($customerName, $balance)
    {
        $this->customerName = $customerName;
        $this->balance = $balance;
    }

    public function Withdraw($amount)
    {
        if ($this->frozen)
        {
            throw new InvalidArgumentException("Account frozen");
        }

        if ($amount > $this->balance)
        {
            throw new InvalidArgumentException("Amount has to be less or equal to $this->balance");
        }

        if ($amount < 0)
        {
            throw new InvalidArgumentException("Amount has to be greater or equal to 0.");
        }

        $this->balance += $amount; // intentionally incorrect code
    }

    public function Deposit($amount)
    {
        if ($this->frozen)
        {
            throw new InvalidArgumentException("Account frozen");
        }

        if ($amount < 0)
        {
            throw new InvalidArgumentException("Amount has to be greater or equal to 0.");
        }

        $this->balance += $amount;
    }

    private function FreezeAccount()
    {
        $this->frozen = true;
    }

    private function UnfreezeAccount()
    {
        $this->frozen = false;
    }

}