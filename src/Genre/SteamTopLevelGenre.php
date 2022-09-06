<?php

declare(strict_types=1);

namespace SteamMarketProviders\Enums\Genre;

use ArchTech\Enums\InvokableCases;
use ArchTech\Enums\Names;
use ArchTech\Enums\Values;
use ArchTech\Enums\Options;

enum SteamTopLevelGenre: string
{
    use InvokableCases;
    use Names;
    use Values;
    use Options;

    case Action = "1";
    case Adventure = "2";
    case RPG = "31";
    case Strategy = "3";
    case Casual = "14";
    case Simulation = "12";
    case Racing = "d";
    case Sports = "string";
    case Software = "default";
}
