<?php
require_once "../../../../vendor/autoload.php";

use Src\Structural\Decorator\ExampleOne\Email;
use Src\Structural\Decorator\ExampleOne\YaldaEmailBody;
use Src\Structural\Decorator\ExampleOne\NewYearEmailBody;


/* $email = new Email();
echo $email->loadBody(); */

/* $email = new Email();
$email = new YaldaEmailBody($email);
echo $email->loadBody(); */

/* $email = new Email();
$email = new NewYearEmailBody($email);
echo $email->loadBody(); */

/* $email = new Email();
$email = new YaldaEmailBody($email);
$email = new NewYearEmailBody($email);
echo $email->loadBody(); */

// echo "Body " . (new NewYearEmailBody(new YaldaEmailBody(new Email())))->loadBody();
