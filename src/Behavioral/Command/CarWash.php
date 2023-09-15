<?php

namespace Src\Behavioral\Command;

class CarWash
{
    protected array $CustomerList;

    public function newCustomer($TaskList): void
    {
        $this->CustomerList[] = $TaskList;
    }

    public function wash(): void
    {
        foreach ($this->CustomerList as $customer) {
            foreach ($customer as $command) {
                $command->execute();
            }
        }
    }
}