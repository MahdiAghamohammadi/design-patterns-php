<?php

namespace Src\Behavioral\Strategy;

use Src\Behavioral\Strategy\Interfaces\PayStrategy;

class PayByMahdiPal implements PayStrategy
{
    public function pay($amount = 0): void
    {
        echo "Paying " . $amount . " using MahdiPal";
    }
}