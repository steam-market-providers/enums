<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums\Tests;

use KrepyshSpec\SteamEnums\SteamCurrency;
use PHPUnit\Framework\TestCase;

class SteamCurrencyTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamCurrency::cases());
    }
}