<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use GarvinHicking\TcaCountryExample\Controller\LicenseController;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
    'tca_country_example',
    'License',
    [
        LicenseController::class => ['list', 'single', 'new', 'create', 'edit', 'update'],
    ],
    [
        LicenseController::class => ['new', 'create', 'edit', 'update'],
    ],
);
