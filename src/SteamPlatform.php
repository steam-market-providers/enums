<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums;

enum SteamPlatform: string
{
    case Linux_SteamOS = "";
    case MacOS = "";
    case Windows = "";
}