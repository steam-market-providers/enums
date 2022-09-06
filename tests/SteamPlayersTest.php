<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use SteamMarketProviders\Enums\SteamPlayers;
use PHPUnit\Framework\TestCase;

class SteamPlayersTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamPlayers::cases());
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
