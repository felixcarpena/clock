<?php
declare(strict_types=1);

namespace Clock\Component;

class DateTimeTransformer
{
    private const FORMAT = "Y-m-d H:i:s.u";

    public static function fromMutable(\DateTime $dateTime): \DateTimeImmutable
    {
        return \DateTimeImmutable::createFromMutable($dateTime);
    }

    public static function fromImmutable(\DateTimeImmutable $dateTime): \DateTime
    {
        return \DateTime::createFromFormat(self::FORMAT, $dateTime->format(self::FORMAT), $dateTime->getTimezone());
    }
}