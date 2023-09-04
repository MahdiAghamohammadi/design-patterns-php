<?php
require_once "../../../../vendor/autoload.php";

use Src\Structural\Decurator\ExampleTwo\BreakfastDecorator;
use Src\Structural\Decurator\ExampleTwo\SimpleRoom;
use Src\Structural\Decurator\ExampleTwo\WiFiDecorator;


echo "Description: " . (new BreakfastDecorator(new WiFiDecorator(new SimpleRoom())))->getDescription() . "\n";
echo "Price: " . (new BreakfastDecorator(new WiFiDecorator(new SimpleRoom())))->getPrice();