<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums\Genre;

enum SteamTopLevelGenre: string
{
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
