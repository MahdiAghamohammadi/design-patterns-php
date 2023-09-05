<?php

namespace Src\Creational\Factory;

class CarOrder
{
    protected array $carOrders = [];
    protected CarFactory $car;

    public function __construct()
    {
        $this->car = new CarFactory();
    }

    public function order($model = null): void
    {
        $car = $this->car->make($model);
        $this->carOrders[] = $car->getModel();
    }

    public function getCarOrders(): array
    {
        return $this->carOrders;
    }
}
