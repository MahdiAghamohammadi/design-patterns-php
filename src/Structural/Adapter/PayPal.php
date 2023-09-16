<?php

namespace Src\Structural\Adapter;

class PayPal
{
//    before change name
//    public function sendPayment($amount): void
//    {
//        echo "Paying via PayPal: " . $amount;
//    }

//  after change name
    public function amountPay($amount): void
    {
        echo "Paying via PayPal: " . $amount . PHP_EOL;
    }
}