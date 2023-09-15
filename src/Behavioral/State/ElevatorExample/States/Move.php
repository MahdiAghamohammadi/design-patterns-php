<?php

namespace Src\Behavioral\State\ElevatorExample\States;

use Src\Behavioral\State\ElevatorExample\Interfaces\ElevatorStateInterface;

class Move implements ElevatorStateInterface
{

    public function open(): Move
    {
        echo "cannot change state from move to open". PHP_EOL;
        return new Move();
    }

    public function close(): Move
    {
        echo "cannot change state from move to close". PHP_EOL;
        return new Move();
    }

    public function move(): Move
    {
        echo "Already Moving. PHP_EOL ";
        return new Move();
    }

    public function stop(): Stop
    {
        return new Stop();
    }
}