<?php

namespace Src\Behavioral\Command;

use Src\Behavioral\Command\Interfaces\CarWashCommand;

class CarSimpleWashCommand extends CarWashCommand
{

    public function execute(): void
    {
        echo "CarSimpleWashCommand\n";
    }
}