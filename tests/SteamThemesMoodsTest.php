<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums\Tests;

use KrepyshSpec\SteamEnums\SteamThemesMoods;
use PHPUnit\Framework\TestCase;

class SteamThemesMoodsTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamThemesMoods::cases());
    }
}