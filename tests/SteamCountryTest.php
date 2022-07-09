<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use SteamMarketProviders\Enums\SteamCountry;
use PHPUnit\Framework\TestCase;

class SteamCountryTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamCountry::cases());
    }
}
