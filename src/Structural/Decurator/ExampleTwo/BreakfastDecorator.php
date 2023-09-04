<?php

namespace Src\Structural\Decurator\ExampleTwo;

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