<?php

namespace Src\Behavioral\Command;

use Src\Behavioral\Command\Interfaces\CarWashCommand;

class CarWaxCommand extends CarWashCommand
{

    public function execute(): void
    {
        echo "CarWaxCommand\n";
    }
}