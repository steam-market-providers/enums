<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums\Tests;

use KrepyshSpec\SteamEnums\SteamVisuals;
use PHPUnit\Framework\TestCase;

class SteamVisualsTests extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamVisuals::cases());
    }
}
