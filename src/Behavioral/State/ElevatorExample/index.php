<?php

namespace Src\Behavioral\State\ElevatorExample;
require_once "../../../../vendor/autoload.php";

class index
{
    public function elevator(): void
    {
        // The elevator is initially stop
        $elevator = new Elevator();

        $elevator->open();

        $elevator->move();

        $elevator->close();

        $elevator->stop();
    }
}

$result = new index();

$result->elevator();