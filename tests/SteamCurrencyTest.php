<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use SteamMarketProviders\Enums\SteamCurrency;
use PHPUnit\Framework\TestCase;

class SteamCurrencyTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamCurrency::cases());
    }
}
