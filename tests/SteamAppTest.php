<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use SteamMarketProviders\Enums\SteamApp;
use PHPUnit\Framework\TestCase;

class SteamAppTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamApp::cases());
    }
}
