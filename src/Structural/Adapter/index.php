<?php

namespace Src\Structural\Adapter;
require_once '../../../vendor/autoload.php';

$payPal = new PayPalAdapter(new PayPal());

$payPal->pay('26000');

$mahdiPal = new MahdiPalAdapter(new MahdiPal());

$mahdiPal->pay('1000000');