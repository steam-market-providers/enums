<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums\Tests;

use KrepyshSpec\SteamEnums\SteamPlatform;
use PHPUnit\Framework\TestCase;

class SteamPlatformTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamPlatform::cases());
    }
}
