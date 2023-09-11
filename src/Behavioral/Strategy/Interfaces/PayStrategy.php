<?php

namespace Src\Behavioral\Strategy\Interfaces;

interface PayStrategy
{
    public function pay($amount): void;
}