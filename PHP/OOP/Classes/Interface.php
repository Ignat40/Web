<?php

interface IPayType
{
    public function payNow();
    public function paymentProcess();
}

interface ILogin{
    public function loginFirst();
}

class PayPal implements IPayType, ILogin
{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}

class BankTransfer implements IPayType, ILogin
{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements IPayType
{
    public function payNow(){}
    public function paymentProcess()
    {
        $this->payNow();
    }
}

class Cash implements IPayType
{
    public function payNow(){}
    public function paymentProcess()
    {
        $this->payNow();
    }
}

class BuyProduct
{
    public function pay(IPayType $paymentType)
    {
        $paymentType->paymentProcess();
    }
    public function onlinePay(IPayType $paymentType)
    {
        $paymentType->paymentProcess();
    }
}

