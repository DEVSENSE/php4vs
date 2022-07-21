<?php

require "BankAccount.php";


class BankAccountTest extends PHPUnit\Framework\TestCase
{
    /**
     * @var BankAccount
     */
    protected $account;

    function setUp() : void {
        $this->account =  new BankAccount("John", 10);
    }

    function testWithdraw_ValidAmount_ChangesBalance()
    {
        $withdrawal = 1;
        $expected = 9;

        $this->account->Withdraw($withdrawal);
        self::assertEquals($expected, $this->account->balance);
    }

    function testWithdraw_MoreAmountThanBalance_Throws()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->account->Withdraw(20);

    }
}