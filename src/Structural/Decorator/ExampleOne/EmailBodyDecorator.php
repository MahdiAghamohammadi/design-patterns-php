<?php

namespace Src\Structural\Decorator\ExampleOne;

abstract class EmailBodyDecorator implements EmailBody
{
    public function __construct(protected EmailBody $emailBody)
    {
    }

    abstract public function loadBody(): string;
}
