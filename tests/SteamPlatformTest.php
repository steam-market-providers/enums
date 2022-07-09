<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enum\Tests;

use SteamMarketProviders\Enum\SteamPlatform;
use PHPUnit\Framework\TestCase;

class SteamPlatformTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamPlatform::cases());
    }
}
