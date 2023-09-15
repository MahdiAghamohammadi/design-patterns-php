<?php
namespace Src\Behavioral\Command;

require_once '../../../vendor/autoload.php';


$car = new PrideCar();
$car2 = new PrideCar();

$carWash = new CarWash();

$carWash->newCustomer(
    [new CarSimpleWashCommand($car),
    new CarDryCommand($car)]
);

$carWash->newCustomer(
    [new CarSimpleWashCommand($car2),
    new CarDryCommand($car2),
    new CarWaxCommand($car2)]
);

$carWash->wash();
