<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enum\Tests;

use SteamMarketProviders\Enum\SteamGlobalTag;
use PHPUnit\Framework\TestCase;

class SteamGlobalTagTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamGlobalTag::cases());
    }
}
