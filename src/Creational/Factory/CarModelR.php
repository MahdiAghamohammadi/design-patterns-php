<?php

namespace Src\Creational\Factory;

use Src\Creational\Factory\Interfaces\Car;

class CarModelR implements Car
{
    protected string $model = "r";

    public function getModel(): string
    {
        return $this->model;
    }
}
