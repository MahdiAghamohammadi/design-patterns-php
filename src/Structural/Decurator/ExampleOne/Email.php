<?php

namespace Src\Structural\Decurator\ExampleOne;

require_once "EmailBody.php";

class Email implements EmailBody
{
    public function loadBody(): string
    {
        return "This is the main Email body.\n";
    }
}