<?php

declare(strict_types=1);

namespace GarvinHicking\TcaCountryExample\Domain\Model;

use TYPO3\CMS\Core\Context\Context;
use TYPO3\CMS\Core\Country\Country;
use TYPO3\CMS\Core\Site\Entity\SiteLanguage;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class License extends AbstractEntity
{
    protected string $title = '';
    protected string $price = '';
    protected ?Country $country = null;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): void
    {
        $this->country = $country;
    }

    // Special getter to easily access `{license.localizedCountry}` in Fluid
    public function getLocalizedCountry(): string
    {
        // This is a conscious coupling of the Frontend request context to
        // retrieve the Country API with localization in mind.
        // This is just for convenience so that in a Fluid template you can use
        // {item.localizedCountry}
        // instead needing to use
        // <f:translate key="{item.country.localizedNameLabel}" />
        return (string) LocalizationUtility::translate((string) $this->getCountry()?->getLocalizedNameLabel());
    }
}
