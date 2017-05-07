<?php
declare(strict_types=1);

namespace Clock\Infrastructure;

use Clock\Clock;

class SystemClock implements Clock
{
    public function now():\DateTimeImmutable
    {
        return new \DateTimeImmutable("now", new \DateTimeZone('UTC'));
    }
}