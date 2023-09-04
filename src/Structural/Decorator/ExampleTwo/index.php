<?php
require_once "../../../../vendor/autoload.php";

use Src\Structural\Decorator\ExampleTwo\BreakfastDecorator;
use Src\Structural\Decorator\ExampleTwo\SimpleRoom;
use Src\Structural\Decorator\ExampleTwo\WiFiDecorator;


echo "Description: " . (new BreakfastDecorator(new WiFiDecorator(new SimpleRoom())))->getDescription() . "\n";
echo "Price: " . (new BreakfastDecorator(new WiFiDecorator(new SimpleRoom())))->getPrice();
