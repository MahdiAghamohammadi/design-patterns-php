<?php

namespace Src\Behavioral\Observer\Interfaces;

interface SplSubject
{
    /**
     * Attach an SplObserver
     * @link https://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     */
    public function attach(SplObserver $observer): static;

    /**
     * Detach an observer
     * @link https://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     */
    public function detach(SplObserver $observer): void;

    /**
     * Notify an observer
     * @link https://php.net/manual/en/splsubject.notify.php
     */
    public function notify(): void;
}