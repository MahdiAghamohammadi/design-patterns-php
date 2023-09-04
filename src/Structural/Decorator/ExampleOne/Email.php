<?php

namespace Src\Structural\Decorator\ExampleOne;

class Email implements EmailBody
{
    public function loadBody(): string
    {
        return "This is the main Email body.\n";
    }
}
