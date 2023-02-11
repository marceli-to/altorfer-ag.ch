<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod.wizards.newContentElement.wizardItems.dce.header = ' .
    'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'T3.dce',
    'dceuid1',
    [
        'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_dceuid1.20
     tt_content.dce_dceuid1 >
     tt_content.dce_dceuid1 < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_dceuid1
     tt_content.dce_dceuid1.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.common.elements.dce_dceuid1 {
        iconIdentifier = content-textpic
        title = Content Text
        description = Text hinzufügen
        tt_content_defValues {
            CType = dce_dceuid1
        }
    }
    mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_dceuid1)
    TCEFORM.tt_content.pi_flexform.types.dce_dceuid1.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'T3.dce',
    'dceuid2',
    [
        'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_dceuid2.20
     tt_content.dce_dceuid2 >
     tt_content.dce_dceuid2 < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_dceuid2
     tt_content.dce_dceuid2.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.common.elements.dce_dceuid2 {
        iconIdentifier = content-textpic
        title = Content Text/Bild
        description = Text/Bild hinzufügen
        tt_content_defValues {
            CType = dce_dceuid2
        }
    }
    mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_dceuid2)
    TCEFORM.tt_content.pi_flexform.types.dce_dceuid2.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'T3.dce',
    'dceuid3',
    [
        'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_dceuid3.20
     tt_content.dce_dceuid3 >
     tt_content.dce_dceuid3 < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_dceuid3
     tt_content.dce_dceuid3.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.common.elements.dce_dceuid3 {
        iconIdentifier = content-textpic
        title = Content Team
        description = Abteilung hinzufügen
        tt_content_defValues {
            CType = dce_dceuid3
        }
    }
    mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_dceuid3)
    TCEFORM.tt_content.pi_flexform.types.dce_dceuid3.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'T3.dce',
    'dceuid4',
    [
        'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_dceuid4.20
     tt_content.dce_dceuid4 >
     tt_content.dce_dceuid4 < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_dceuid4
     tt_content.dce_dceuid4.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.common.elements.dce_dceuid4 {
        iconIdentifier = content-textpic
        title = Content Geschichte
        description = Text/Bild hinzufügen
        tt_content_defValues {
            CType = dce_dceuid4
        }
    }
    mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_dceuid4)
    TCEFORM.tt_content.pi_flexform.types.dce_dceuid4.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'T3.dce',
    'dceuid5',
    [
        'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_dceuid5.20
     tt_content.dce_dceuid5 >
     tt_content.dce_dceuid5 < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_dceuid5
     tt_content.dce_dceuid5.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.common.elements.dce_dceuid5 {
        iconIdentifier = content-textpic
        title = Content Teaser
        description = Teaser hinzufügen
        tt_content_defValues {
            CType = dce_dceuid5
        }
    }
    mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_dceuid5)
    TCEFORM.tt_content.pi_flexform.types.dce_dceuid5.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default
    "
);


#
