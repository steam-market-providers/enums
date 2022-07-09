<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use SteamMarketProviders\Enums\SteamLanguage;
use PHPUnit\Framework\TestCase;

class SteamLanguageTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamLanguage::cases());
    }

    public function testReturnedType(): void
    {
        foreach (SteamLanguage::cases() as $data) {
            $this->assertIsString($data->value);
        }
    }
}
