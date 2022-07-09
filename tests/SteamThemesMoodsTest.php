<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enum\Tests;

use SteamMarketProviders\Enum\SteamThemesMoods;
use PHPUnit\Framework\TestCase;

class SteamThemesMoodsTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamThemesMoods::cases());
    }
}
