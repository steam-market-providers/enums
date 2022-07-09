<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use SteamMarketProviders\Enums\SteamPlatform;
use PHPUnit\Framework\TestCase;

class SteamPlatformTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamPlatform::cases());
    }
}
