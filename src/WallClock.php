<?php

declare(strict_types=1);

namespace Navarr\WallClock;

use DateTimeImmutable;
use JetBrains\PhpStorm\Pure;
use Psr\Clock\ClockInterface;

class WallClock implements ClockInterface
{
    #[Pure]
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}
