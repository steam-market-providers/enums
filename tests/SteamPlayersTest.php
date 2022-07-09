<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enum\Tests;

use SteamMarketProviders\Enum\SteamPlayers;
use PHPUnit\Framework\TestCase;

class SteamPlayersTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamPlayers::cases());
    }
}
