<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use SteamMarketProviders\Enums\SteamThemesMoods;
use PHPUnit\Framework\TestCase;

class SteamThemesMoodsTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamThemesMoods::cases());
    }
//
//
//    public function testInvokableCases(): void
//    {
//
//    }
//
//    public function testNames(): void
//    {
//
//    }
//
//    public function testValues(): void
//    {
//
//    }
//
//    public function testOptions(): void
//    {
//
//    }
}
