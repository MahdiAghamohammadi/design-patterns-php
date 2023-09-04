<?php

namespace Src\Structural\Decurator\ExampleTwo;

require_once "RoomInterface.php";

class RoomDecorator implements RoomInterface
{
    public function __construct(protected RoomInterface $room)
    {
    }

    public function getDescription(): string
    {
        return $this->room->getDescription();
    }

    public function getPrice(): float|int
    {
        return $this->room->getPrice();
    }
}