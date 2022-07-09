<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums\Tests;

use KrepyshSpec\SteamEnums\SteamCountry;
use PHPUnit\Framework\TestCase;

class SteamCountryTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamCountry::cases());
    }
}
