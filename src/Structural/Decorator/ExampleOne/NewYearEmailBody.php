<?php

namespace Src\Structural\Decorator\ExampleOne;

class NewYearEmailBody extends EmailBodyDecorator
{
    public function loadBody(): string
    {
        echo "This is the extra content for the New Year.\n";
        return $this->emailBody->loadBody();
    }
}
