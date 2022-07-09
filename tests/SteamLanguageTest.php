<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enum\Tests;

use SteamMarketProviders\Enum\SteamLanguage;
use PHPUnit\Framework\TestCase;

class SteamLanguageTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamLanguage::cases());
    }
}
