<?php

namespace Src\Behavioral\State\ElevatorExample\States;

use Src\Behavioral\State\ElevatorExample\Interfaces\ElevatorStateInterface;

class Stop implements ElevatorStateInterface
{

    public function open(): Open
    {
        return new Open();
    }

    public function close(): Close
    {
        return new Close();
    }

    public function move(): Move
    {
        return new Move();
    }

    public function stop(): Stop
    {
        echo "Already Stopped" . PHP_EOL;
        return new Stop();
    }
}