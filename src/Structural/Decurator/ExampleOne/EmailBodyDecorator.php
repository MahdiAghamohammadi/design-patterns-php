<?php

namespace Src\Structural\Decurator\ExampleOne;

require_once "EmailBody.php";

abstract class EmailBodyDecorator implements EmailBody
{
    public function __construct(protected EmailBody $emailBody)
    {
    }

    abstract public function loadBody(): string;
}