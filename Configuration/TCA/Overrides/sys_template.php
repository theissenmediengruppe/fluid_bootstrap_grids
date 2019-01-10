<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    $extensionKey = 'fluid_bootstrap_grids';

    /**
     * Default TypoScript for FluidBootstrapGrids
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'FluidBootstrapGrids'
    );
});
