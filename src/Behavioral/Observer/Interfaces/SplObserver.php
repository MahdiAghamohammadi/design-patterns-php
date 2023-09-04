<?php

namespace Src\Behavioral\Observer\Interfaces;

interface SplObserver
{
    /**
     * Receive update from subject
     * @link https://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     */
    public function update(SplSubject $subject): void;
}