<?php
require_once '../../../vendor/autoload.php';

use Src\Behavioral\Strategy\ShoppingCart;

/*$cart = new ShoppingCart(499999);
$cart->payAmount(); // return Paying 499999 using PayPal*/

/*$cart = new ShoppingCart(510000);
$cart->payAmount(); // return Paying 510000 using Credit Card*/

$cart = new ShoppingCart(10000000);
$cart->payAmount(); // return Paying 10000000 using MahdiPal
