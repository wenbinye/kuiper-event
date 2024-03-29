<?php

declare(strict_types=1);

namespace kuiper\event;

use Psr\EventDispatcher\EventDispatcherInterface;

class NullEventDispatcher implements EventDispatcherInterface
{
    public function dispatch(object $event)
    {
    }
}
