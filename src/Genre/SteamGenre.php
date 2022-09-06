<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Genre;

use ArchTech\Enums\InvokableCases;
use ArchTech\Enums\Names;
use ArchTech\Enums\Values;
use ArchTech\Enums\Options;

enum SteamGenre: string
{
    use InvokableCases;
    use Names;
    use Values;
    use Options;

    case Tabletop = "1";
    case Party_Based_RPG = "2";
}
