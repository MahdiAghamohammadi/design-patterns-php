<?php

namespace Src\Behavioral\Observer;

use Src\Behavioral\Observer\Interfaces\SplObserver;
use Src\Behavioral\Observer\Interfaces\SplSubject;

class EmailAuthor implements SplObserver
{

    public function update(SplSubject $subject): void
    {
        echo __METHOD__ . " Emailing the author of post id: " . $subject->post_id . " that someone commented with : " . $subject->comment_text . "\n";
    }
}