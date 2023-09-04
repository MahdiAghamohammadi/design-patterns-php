<?php

namespace Src\Structural\Decorator\ExampleTwo;

require_once "RoomDecorator.php";

class BreakfastDecorator extends RoomDecorator
{
    public function getDescription(): string
    {
        return parent::getDescription() . " + Breakfast ";
    }

    public function getPrice(): float|int
    {
        return parent::getPrice() + 1.00;
    }
}
