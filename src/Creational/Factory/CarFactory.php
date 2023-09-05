<?php

namespace Src\Creational\Factory;

class CarFactory
{
    protected $car;

    public function make($model): CarModelS|CarModelR|CarModelNotDefined
    {
        $model = strtolower($model);

        if ($model === "r") {
            return $this->car = new CarModelR();
        } elseif ($model === "s") {
            return $this->car = new CarModelS();
        } else {
            return $this->car = new CarModelNotDefined();
        }
    }

}
