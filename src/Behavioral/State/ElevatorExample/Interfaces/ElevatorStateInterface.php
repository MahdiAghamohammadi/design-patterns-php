<?php

namespace Src\Behavioral\State\ElevatorExample\Interfaces;

interface ElevatorStateInterface
{
    public function open();

    public function close();

    public function move();

    public function stop();
}