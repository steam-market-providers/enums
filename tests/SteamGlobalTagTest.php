<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use SteamMarketProviders\Enums\SteamGlobalTag;
use PHPUnit\Framework\TestCase;

class SteamGlobalTagTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamGlobalTag::cases());
    }
}
