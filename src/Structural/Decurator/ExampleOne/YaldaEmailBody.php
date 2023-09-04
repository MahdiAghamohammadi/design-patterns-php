<?php

namespace Src\Structural\Decurator\ExampleOne;

require_once "EmailBodyDecorator.php";


class YaldaEmailBody extends EmailBodyDecorator
{
    public function loadBody(): string
    {
        echo "This is the extra content for Yalda.\n";
        return $this->emailBody->loadBody();
    }
}