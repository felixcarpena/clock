<?php
declare(strict_types=1);

namespace Tests\Clock\Infrastructure;

use Clock\Infrastructure\SystemClock;
use PHPUnit\Framework\TestCase;

class SystemClockTest extends TestCase
{
    /** @test */
    public function should_return_immutable_datetime(): void
    {
        $clock = new SystemClock();
        static::assertInstanceOf(\DateTimeImmutable::class, $clock->now());
    }

    /** @test */
    public function should_be_in_utc_time_zone(): void
    {
        $clock = new SystemClock();
        $utcTimeZone = new \DateTimeZone('UTC');
        static::assertEquals($utcTimeZone, $clock->now()->getTimezone());
    }
}
