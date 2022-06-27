<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums;

enum SteamPlatform: string
{
    case Linux_SteamOS = "1";
    case MacOS = "2";
    case Windows = "3";
}
