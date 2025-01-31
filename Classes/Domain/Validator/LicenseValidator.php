<?php

declare(strict_types=1);

namespace GarvinHicking\TcaCountryExample\Domain\Validator;

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
            $error = new Error('Title must be set.', 1480872650);
            $this->result->forProperty('title')->addError($error);
        }
        // @TODO: Country, price
    }
}
