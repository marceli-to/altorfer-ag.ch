<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('rte_config', 'Configuration/TypoScript', 'RTE Configuration');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rteconfig_domain_model_rte', 'EXT:rte_config/Resources/Private/Language/locallang_csh_tx_rteconfig_domain_model_rte.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rteconfig_domain_model_rte');

    }
);
