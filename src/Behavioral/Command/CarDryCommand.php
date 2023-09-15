<?php

namespace Src\Behavioral\Command;

use Src\Behavioral\Command\Interfaces\CarWashCommand;

class CarDryCommand extends CarWashCommand
{

    public function execute(): void
    {
        echo "CarDryCommand\n";
    }
}