<?php

namespace Src\Structural\Decorator\ExampleOne;


class YaldaEmailBody extends EmailBodyDecorator
{
    public function loadBody(): string
    {
        echo "This is the extra content for Yalda.\n";
        return $this->emailBody->loadBody();
    }
}
