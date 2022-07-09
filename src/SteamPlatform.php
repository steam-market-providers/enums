<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enum;

enum SteamPlatform: string
{
    case Linux_SteamOS = "linux";
    case MacOS = "mac";
    case Windows = "win";
}
