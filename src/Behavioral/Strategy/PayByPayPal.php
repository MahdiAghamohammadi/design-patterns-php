<?php
namespace Src\Behavioral\Strategy;
use Src\Behavioral\Strategy\Interfaces\PayStrategy;

class PayByPayPal implements PayStrategy
{
    public function pay($amount = 0): void
    {
        echo "Paying " . $amount . " using PayPal";
    }
}