<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use GarvinHicking\TcaCountryExample\Controller\LicenseController;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
    'tca_country_example',
    'License',
    [
        LicenseController::class => ['list', 'show', 'new', 'create', 'edit', 'update'],
    ],
    [
        // Note: "list" and "show" could be cached, but would need custom cache invalidation on
        // frontend updates, which is why we do not cache it for this example, so no stale data
        // is shown.
        LicenseController::class => ['list', 'show', 'new', 'create', 'edit', 'update'],
    ],
);
