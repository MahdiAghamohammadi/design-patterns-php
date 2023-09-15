<?php

namespace Src\Behavioral\State\ElevatorExample\States;

use Src\Behavioral\State\ElevatorExample\Interfaces\ElevatorStateInterface;

class Open implements ElevatorStateInterface
{

    public function open(): Open
    {
        echo "Already Open" . PHP_EOL;
        return new Open();
    }

    public function close(): Close
    {
        return new Close();
    }

    public function move(): Open
    {
        echo "cannot change state from open to move". PHP_EOL;
        return new Open();
    }

    public function stop(): Open
    {
        echo "cannot change state from open to stop". PHP_EOL;
        return new Open();
    }
}