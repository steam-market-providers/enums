<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums\Tests;

use KrepyshSpec\SteamEnums\SteamLanguage;
use PHPUnit\Framework\TestCase;

class SteamLanguageTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamLanguage::cases());
    }
}