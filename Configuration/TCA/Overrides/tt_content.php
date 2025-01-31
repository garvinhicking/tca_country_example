<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(static function () {
    ExtensionUtility::registerPlugin(
        'tca_country_example',
        'License',
        'License management'
    );
})();
