<?php

declare(strict_types=1);

namespace KrepyshSpec\SteamEnums;

enum SteamCurrency: int
{
    case USD = 1;   # United States dollar
    case GBP = 2;   # British pound sterling
    case EUR = 3;   # The euro
    case CHF = 4;   # Swiss franc
    case RUB = 5;   # Russian ruble
    case PLN = 6;   # Polish złoty
    case BRL = 7;   # Brazilian real
    case JPY = 8;   # Japanese yen
    case SEK = 9;   # Swedish krona
    case IDR = 10;  # Indonesian rupiah
    case MYR = 11;  # Malaysian ringgit
    case BWP = 12;  # Botswana pula
    case SGD = 13;  # Singapore dollar
    case THB = 14;  # Thai baht
    case VND = 15;  # Vietnamese dong
    case KRW = 16;  # South Korean won
    case TRY = 17;  # Turkish lira
    case UAH = 18;  # Ukrainian hryvnia
    case MXN = 19;  # Mexican Peso
    case CAD = 20;  # Canadian dollar
    case AUD = 21;  # Australian dollar
    case NZD = 22;  # New Zealand dollar
    case CNY = 23;  # Chinese yuan
    case INR = 24;  # Indian rupee
    case CLP = 25;  # Chilean peso
    case PEN = 26;  # Peruvian sol
    case COP = 27;  # Colombian peso
    case ZAR = 28;  # South African rand
    case HKD = 29;  # Hong Kong dollar
    case TWD = 30;  # New Taiwan dollar
    case SAR = 31;  # Saudi riyal
    case AED = 32;  # United Arab Emirates dirham

    /**
     * @return $this
     */
    public function default(): self
    {
        return self::USD;
    }
}
