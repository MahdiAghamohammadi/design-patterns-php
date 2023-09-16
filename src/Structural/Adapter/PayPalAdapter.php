<?php

namespace Src\Structural\Adapter;

use Src\Structural\Adapter\Interfaces\PaymentAdapter;

class PayPalAdapter implements PaymentAdapter
{
    public function __construct(private PayPal $payPal)
    {
    }

    public function pay($amount): void
    {
//        before
//        $this->payPal->sendPayment($amount);
//        after
        $this->payPal->amountPay($amount);
    }
}