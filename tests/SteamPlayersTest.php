<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums\Tests;

use KrepyshSpec\SteamEnums\SteamPlayers;
use PHPUnit\Framework\TestCase;

class SteamPlayersTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamPlayers::cases());
    }
}