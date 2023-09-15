<?php

namespace Src\Behavioral\State\ElevatorExample;

use Src\Behavioral\State\ElevatorExample\Interfaces\ElevatorStateInterface;
use Src\Behavioral\State\ElevatorExample\States\Stop;

class Elevator
{
    private $state;

    private function setState(ElevatorStateInterface $state): void
    {
        $this->state = $state;
        echo "set state to : " . get_class($state) . PHP_EOL;
    }

    public function __construct()
    {
        $this->setState(new Stop());
    }

    public function open(): void
    {
        $this->setState($this->state->open());
    }

    public function close(): void
    {
        $this->setState($this->state->close());
    }

    public function move(): void
    {
        $this->setState($this->state->move());
    }

    public function stop(): void
    {
        $this->setState($this->state->stop());
    }
}