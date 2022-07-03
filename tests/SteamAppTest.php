<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums\Tests;

use KrepyshSpec\SteamEnums\SteamApp;
use PHPUnit\Framework\TestCase;

class SteamAppTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamApp::cases());
    }
}