<?php

declare(strict_types=1);

namespace GarvinHicking\TcaCountryExample\Domain\Model\Enum;

// Using an ENUM for this helps to re-use this for both TCA and Extbase
// (of course it can be configured independently, too)
enum AvailableCountries: string
{
    case DE = 'DE';
    case AT = 'AT';
    case CH = 'CH';
    case FR = 'FR';
    case IT = 'IT';

    public static function default(): string
    {
        return AvailableCountries::CH->value;
    }

    public static function values(): array
    {
        $items = [];
        foreach (AvailableCountries::cases() as $case) {
            $items[] = $case->value;
        }
        return $items;
    }
}
