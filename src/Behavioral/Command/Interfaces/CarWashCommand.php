<?php

namespace Src\Behavioral\Command\Interfaces;

abstract class CarWashCommand
{
    public function __construct(protected CarInterface $car)
    {
    }

    abstract public function execute();
}