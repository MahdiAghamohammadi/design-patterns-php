<?php

namespace Src\Structural\Adapter;

use Src\Structural\Adapter\Interfaces\PaymentAdapter;

class MahdiPalAdapter implements PaymentAdapter
{
    public function __construct(private MahdiPal $mahdiPal)
    {
    }

    public function pay($amount): void
    {
        $this->mahdiPal->doPayment($amount);
    }
}