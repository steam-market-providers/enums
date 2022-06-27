<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums;

enum SteamLanguage: string
{
    case Bulgarian             = "bulgarian";
    case Danish                = "danish";
    case English               = "english";
    case French                = "french";
    case Greek                 = "greek";
    case Italian               = "italian";
    case Korean                = "koreana";
    case Polish                = "polish";
    case Portuguese_Brazil     = "brazilian";
    case Russian               = "russian";
    case Spanish_Latin_America = "latam";
    case Swedish               = "swedish";
    case Traditional_Chinese   = "tchinese";
    case Ukrainian             = "ukrainian";
    case Czech                 = "czech";
    case Dutch                 = "dutch";
    case Finnish               = "finnish";
    case German                = "german";
    case Hungarian             = "hungarian";
    case Japanese              = "japanese";
    case Norwegian             = "norwegian";
    case Portuguese            = "portuguese";
    case Romanian              = "romanian";
    case Simplified_Chinese    = "schinese";
    case Spanish_spain         = "spanish";
    case Thai                  = "thai";
    case Turkish               = "turkish";
    case Vietnamese            = "vietnamese";

    /**
     * @return $this
     */
    public function default(): self
    {
        return self::English;
    }
}