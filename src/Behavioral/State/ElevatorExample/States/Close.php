<?php

namespace Src\Behavioral\State\ElevatorExample\States;

use Src\Behavioral\State\ElevatorExample\Interfaces\ElevatorStateInterface;

class Close implements ElevatorStateInterface
{

    public function open(): Open
    {
        return new Open();
    }

    public function close(): Close
    {
        echo "Already Closed" . PHP_EOL;
        return new Close();
    }

    public function move(): Move
    {
        return new Move();
    }

    public function stop(): Close
    {
        echo "cannot change position from close to stop" . PHP_EOL;
        return new Close();
    }
}