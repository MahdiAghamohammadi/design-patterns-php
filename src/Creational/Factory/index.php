<?php
require_once "../../../vendor/autoload.php";

use Src\Creational\Factory\CarOrder;

$carOrder = new CarOrder;

$carOrder->order('s');
$carOrder->order('r');
$carOrder->order('a'); // undefined

var_dump($carOrder->getCarOrders());
