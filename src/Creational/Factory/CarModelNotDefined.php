<?php

namespace Src\Creational\Factory;

use Src\Creational\Factory\Interfaces\Car;

class CarModelNotDefined implements Car
{
    public function getModel(): string
    {
        return 'this model is not defined';
    }
}
