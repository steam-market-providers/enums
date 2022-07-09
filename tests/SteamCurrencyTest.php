<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enum\Tests;

use SteamMarketProviders\Enum\SteamCurrency;
use PHPUnit\Framework\TestCase;

class SteamCurrencyTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamCurrency::cases());
    }
}
