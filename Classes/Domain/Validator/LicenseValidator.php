<?php

declare(strict_types=1);

namespace GarvinHicking\TcaCountryExample\Domain\Validator;

use GarvinHicking\TcaCountryExample\Domain\Model\Enum\AvailableCountries;
use TYPO3\CMS\Extbase\Validation\Error;
use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;
use GarvinHicking\TcaCountryExample\Domain\Model\License;

class LicenseValidator extends AbstractValidator
{
    /**
     * @param License $value
     */
    protected function isValid(mixed $value): void
    {
        if ($value->getTitle() === '') {
            $error = new Error('Title must be set.', 4815162342);
            $this->result->forProperty('title')->addError($error);
        }

        if ($value->getCountry() === null) {
            $error = new Error('Valid country (alpha2) must be set.', 4815162343);
            $this->result->forProperty('country')->addError($error);
        } else {
            $allowedCountries = AvailableCountries::values();
            if (!in_array($value->getCountry()->getAlpha2IsoCode(), $allowedCountries)) {
                $error = new Error('Country ' . $value->getCountry()->getAlpha2IsoCode() . ' not allowed.', 4815162344);
                $this->result->forProperty('country')->addError($error);
            }
        }
    }
}
