<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums;

use ArchTech\Enums\InvokableCases;
use ArchTech\Enums\Names;
use ArchTech\Enums\Values;
use ArchTech\Enums\Options;

enum SteamPlatform: string
{
    use InvokableCases;
    use Names;
    use Values;
    use Options;

    case Linux_SteamOS = "linux";
    case MacOS = "mac";
    case Windows = "win";
}
