<?php

require "BankAccount.php";


class BankAccountTest extends PHPUnit\Framework\TestCase
{
    /**
     * @var BankAccount
     */
    protected $account;

    function setUp(){
        $this->account =  new BankAccount("John", 10);
    }

    /**
     * @group General
     */
    function testWithdraw_ValidAmount_ChangesBalance()
    {
        $withdrawal = 1;
        $expected = 9;

        $this->account->Withdraw($withdrawal);
        self::assertEquals($expected, $this->account->balance);
    }

    /**
     * @expectedException InvalidArgumentException
     * @group Exceptions
     */
    function testWithdraw_MoreAmountThanBalance_Throws()
    {
        $this->account->Withdraw(20);
       
    }
}