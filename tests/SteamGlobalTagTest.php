<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums\Tests;

use KrepyshSpec\SteamEnums\SteamGlobalTag;
use PHPUnit\Framework\TestCase;

class SteamGlobalTagTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamGlobalTag::cases());
    }
}