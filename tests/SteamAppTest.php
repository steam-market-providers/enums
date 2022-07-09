<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enum\Tests;

use SteamMarketProviders\Enum\SteamApp;
use PHPUnit\Framework\TestCase;

class SteamAppTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamApp::cases());
    }
}
