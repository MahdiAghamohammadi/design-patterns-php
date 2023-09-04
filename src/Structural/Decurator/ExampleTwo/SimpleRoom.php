<?php

namespace Src\Structural\Decurator\ExampleTwo;

require_once "RoomInterface.php";

class SimpleRoom implements RoomInterface
{
    public function getDescription(): string
    {
        return "base Room";
    }

    public function getPrice(): float|int
    {
        return 2.00;
    }
}