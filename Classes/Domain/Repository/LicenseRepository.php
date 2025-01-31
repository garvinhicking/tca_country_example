<?php

declare(strict_types=1);

namespace GarvinHicking\TcaCountryExample\Domain\Repository;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class LicenseRepository extends Repository
{
    protected $defaultOrderings = ['title' => QueryInterface::ORDER_ASCENDING];

    public function initializeObject(): void
    {
        $defaultQuerySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($defaultQuerySettings);
        #$defaultQuerySettings->setIgnoreEnableFields(false);
        #$defaultQuerySettings->setRespectStoragePage(false);
        #$this->setDefaultQuerySettings($defaultQuerySettings);
    }
}
