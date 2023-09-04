<?php
namespace Src\Behavioral\Observer;

use Src\Behavioral\Observer\Interfaces\SplObserver;
use Src\Behavioral\Observer\Interfaces\SplSubject;
class AddedComment implements SplSubject
{
    protected array $observers = [];

    public function __construct(
        public $comment_text,
        public $post_id
    )
    {
    }

    public function attach(SplObserver $observer): static
    {
        $key = spl_object_hash($observer);
        $this->observers[$key] = $observer;

        return $this;
    }


    public function detach(SplObserver $observer): void
    {
        $key = spl_object_hash($observer);
        unset($this->observers[$key]);
    }


    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}