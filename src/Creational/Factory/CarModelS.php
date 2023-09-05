<?php

namespace Src\Creational\Factory;

use Src\Creational\Factory\Interfaces\Car;

class CarModelS implements Car
{
    protected string $model = "s";

    public function getModel(): string
    {
        return $this->model;
    }
}
