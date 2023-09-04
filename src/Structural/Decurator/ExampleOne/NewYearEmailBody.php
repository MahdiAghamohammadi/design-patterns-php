<?php

namespace Src\Structural\Decurator\ExampleOne;

require_once "EmailBodyDecorator.php";

class NewYearEmailBody extends EmailBodyDecorator
{
    public function loadBody(): string
    {
        echo "This is the extra content for the New Year.\n";
        return $this->emailBody->loadBody();
    }
}