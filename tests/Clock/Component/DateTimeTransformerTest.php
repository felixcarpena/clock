<?php
declare(strict_types=1);

namespace Test\Clock\Component;

use Clock\Component\DateTimeTransformer;
use PHPUnit\Framework\TestCase;

class DateTimeTransformerTest extends TestCase
{
    private const DATE_TIME = '2017-01-01 10:00:00.666666';
    private const FORMAT = 'Y-m-d H:i:s.u';

    /** @test */
    public function Should_return_immutable_ateTime(): void
    {
        $timezone = new \DateTimeZone('UTC');
        $expectedDateTime = \DateTimeImmutable::createFromFormat(self::FORMAT, self::DATE_TIME, $timezone);

        $immutableDateTime = DateTimeTransformer::fromMutable(new \DateTime(self::DATE_TIME, $timezone));
        static::assertEquals($expectedDateTime, $immutableDateTime);
    }

    /** @test */
    public function shouldReturnMutableDateTime(): void
    {
        $timezone = new \DateTimeZone('UTC');
        $expectedDateTime = \DateTime::createFromFormat(self::FORMAT, self::DATE_TIME, $timezone);

        $immutableDateTime = DateTimeTransformer::fromImmutable(new \DateTimeImmutable(self::DATE_TIME, $timezone));
        static::assertEquals($expectedDateTime, $immutableDateTime);
    }

}
