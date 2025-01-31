<?php

declare(strict_types=1);

namespace GarvinHicking\TcaCountryExample\Domain\Model\Enum;

// Using an ENUM for this helps to re-use this for both TCA and Extbase
// (of course it can be configured independently, too)
enum PrioritizedCountries: string
{
    case DE = 'DE';
    case CH = 'CH';
    case AT = 'AT';

    public static function values(): array
    {
        $items = [];
        foreach (PrioritizedCountries::cases() as $case) {
            $items[] = $case->value;
        }
        return $items;
    }
}
