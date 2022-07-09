<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enum\Tests;

use SteamMarketProviders\Enum\SteamCountry;
use PHPUnit\Framework\TestCase;

class SteamCountryTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamCountry::cases());
    }
}
