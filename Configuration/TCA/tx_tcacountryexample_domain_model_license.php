<?php

declare(strict_types=1);

use GarvinHicking\TcaCountryExample\Domain\Model\Enum\AvailableCountries;
use GarvinHicking\TcaCountryExample\Domain\Model\Enum\ExtraCountries;
use GarvinHicking\TcaCountryExample\Domain\Model\Enum\PrioritizedCountries;

return [
    'ctrl' => [
        'title' => 'LLL:EXT:tca_country_example/Resources/Private/Language/locallang_db.xlf:tx_tcacountryexample_domain_model_license',
        'label' => 'title',
        'label_alt' => 'country',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:tca_country_example/Resources/Public/Icons/icon_tx_tcacountryexample_domain_model_license.gif',
    ],
    'columns' => [
        'title' => [
            'label' => 'LLL:EXT:tca_country_example/Resources/Private/Language/locallang_db.xlf:tx_tcacountryexample_domain_model_license.title',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'required' => true,
                'eval' => 'trim',
            ],
        ],
        'price' => [
            'label' => 'LLL:EXT:blog_example/Resources/Private/Language/locallang_db.xlf:tx_tcacountryexample_domain_model_license.price',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'required' => true,
                'eval' => 'trim',
            ],
        ],
        'country' => [
            'label' => 'LLL:EXT:blog_example/Resources/Private/Language/locallang_db.xlf:tx_tcacountryexample_domain_model_license.country',
            'config' => [
                'type' => 'country',
                'labelField' => 'localizedName',
                'prioritizedCountries' => PrioritizedCountries::values(),
                'default' => AvailableCountries::default(),
                'sortItems' => [
                    'label' => 'asc',
                ],
                'filter' => [
                    // NOTE: TCA is cached, dynamic calls are only allowed for stable static values, which is the case here.
                    'onlyCountries' => AvailableCountries::values(),

                ],
                'required' => true,
            ],
        ],
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, title, price, country'],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
    ],
];
