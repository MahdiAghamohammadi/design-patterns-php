<?php

namespace Src\Behavioral\Observer;

use Src\Behavioral\Observer\Interfaces\SplObserver;
use Src\Behavioral\Observer\Interfaces\SplSubject;

class IncrementCommentCount implements SplObserver
{

    public function update(SplSubject $subject): void
    {
        echo __METHOD__ . "Updating comment count to + 1 for blog post id: " . $subject->post_id . "\n";
    }
}