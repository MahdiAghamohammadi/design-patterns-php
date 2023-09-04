<?php

namespace Src\Structural\Decorator\ExampleTwo;

require_once "RoomDecorator.php";

class WiFiDecorator extends RoomDecorator
{
    public function getDescription(): string
    {
        return parent::getDescription() . " + WiFi";
    }

    public function getPrice(): float|int
    {
        return parent::getPrice() + 2.00;
    }
}
