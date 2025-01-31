<?php

declare(strict_types=1);

namespace GarvinHicking\TcaCountryExample\Domain\Model;

use TYPO3\CMS\Core\Country\Country;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

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
}
