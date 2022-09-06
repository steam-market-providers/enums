<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Tests;

use SteamMarketProviders\Enums\SteamCurrency;
use PHPUnit\Framework\TestCase;

class SteamCurrencyTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertIsArray(SteamCurrency::cases());
    }

    public function testReturnedType(): void
    {
        foreach (SteamCurrency::cases() as $data) {
            $this->assertIsInt($data->value);
        }
    }
//
//
//    public function testInvokableCases(): void
//    {
//
//    }
//
//    public function testNames(): void
//    {
//
//    }
//
//    public function testValues(): void
//    {
//
//    }
//
//    public function testOptions(): void
//    {
//
//    }
}
