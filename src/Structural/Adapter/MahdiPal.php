<?php

namespace Src\Structural\Adapter;

class MahdiPal
{
    public function doPayment($amount): void
    {
        echo "Paying via MahdiPal: " . $amount . PHP_EOL;
    }
}