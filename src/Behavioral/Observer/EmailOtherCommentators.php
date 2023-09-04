<?php

namespace Src\Behavioral\Observer;

use Src\Behavioral\Observer\Interfaces\SplObserver;
use Src\Behavioral\Observer\Interfaces\SplSubject;

class EmailOtherCommentators implements SplObserver
{

    public function update(SplSubject $subject): void
    {
        echo __METHOD__ . "Emailing all other comment authors who commented on " . $subject->post_id . " that someone commented with : " . $subject->comment_text . "\n";
    }
}