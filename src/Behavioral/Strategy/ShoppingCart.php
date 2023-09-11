<?php

namespace Src\Behavioral\Strategy;
class ShoppingCart
{
    public function __construct(
        public int $amount = 0
    )
    {
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function payAmount(): void
    {
        if ($this->amount > 1000000) {
            $payment = new PayByMahdiPal();
        } elseif ($this->amount >= 500000) {
            $payment = new PayByCC();
        } else {
            $payment = new PayByPayPal();
        }
        $payment->pay($this->amount);
    }
}