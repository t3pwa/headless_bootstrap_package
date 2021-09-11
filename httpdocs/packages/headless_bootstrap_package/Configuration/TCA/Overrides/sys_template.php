<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {
    /**
     * Default TypoScript for Headless Bootstrap Package
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'headless_bootstrap_package',
        'Configuration/TypoScript',
        'Headless Bootstrap Package'
    );

});
