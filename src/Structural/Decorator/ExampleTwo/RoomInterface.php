<?php

namespace Src\Structural\Decorator\ExampleTwo;

interface RoomInterface
{
    public function getDescription(): string;

    public function getPrice(): float|int;
}
