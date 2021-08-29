<?php

/**
 * Copyright © 2021 Navarr Barnier. All Rights Reserved.
 * Source available under the MIT License
 */

declare(strict_types=1);

namespace Navarr\WallClock\Test;

use Navarr\WallClock\WallClock;
use PHPUnit\Framework\TestCase;

class WallClockTest extends TestCase
{
    public function testSystemClockReturnsSameTimeAsPhp(): void
    {
        $wallClock = new WallClock();

        // We're going to test that they're the same down to the second, so make sure we're not at risk of going over
        while ((int)date('u') > 900) {
            // Loop until a new second
        }

        $this->assertEquals(
            date('Y-m-d H:i:s'),
            $wallClock->now()->format('Y-m-d H:i:s')
        );
    }
}
