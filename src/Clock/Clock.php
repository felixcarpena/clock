<?php
declare(strict_types=1);

namespace Clock;

interface Clock
{
    /**
     * Will return the current datetime in the UTC time zone
     * @return \DateTimeImmutable
     */
    public function now(): \DateTimeImmutable;
}