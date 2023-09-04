<?php

namespace Src\Structural\Decurator\ExampleTwo;
interface RoomInterface
{
    public function getDescription(): string;

    public function getPrice(): float|int;
}