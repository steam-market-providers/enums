<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use SteamMarketProviders\Enums\SteamVisuals;
use PHPUnit\Framework\TestCase;

class SteamVisualsTests extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamVisuals::cases());
    }
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
