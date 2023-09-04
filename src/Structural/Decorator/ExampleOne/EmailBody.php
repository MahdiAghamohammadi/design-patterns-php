<?php

namespace Src\Structural\Decorator\ExampleOne;

interface EmailBody
{
    public function loadBody(): string;
}
