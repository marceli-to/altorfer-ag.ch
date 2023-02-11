<?php

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long',
    1 => '--div--'
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.miscellaneous',
    1 => '--div--'
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Content Text',
        'dce_dceuid1',
        'content-textpic',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_dceuid1'] = 'content-textpic';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid1'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid1'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle><type>array</type><el><settings.title><TCEforms><label><![CDATA[Titel]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config></TCEforms></settings.title><settings.text><TCEforms><label><![CDATA[Text]]></label><config>
	<type>text</type>
	<rows>5</rows>
	<cols>30</cols>
	<eval>trim</eval>
	<enableRichtext>1</enableRichtext>
	<richtextConfiguration>default</richtextConfiguration>
</config>
</TCEforms></settings.text><settings.orientation><TCEforms><label><![CDATA[Ausrichtung]]></label><config>
	<type>select</type>
	<items type="array">
		<numIndex index="0" type="array">
			<numIndex index="0">Links</numIndex>
			<numIndex index="1">0</numIndex>
		</numIndex>
		<numIndex index="1" type="array">
			<numIndex index="0">Rechts</numIndex>
			<numIndex index="1">1</numIndex>
		</numIndex>
	</items>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
</config>
<!-- <onChange>reload</onChange> -->
</TCEforms></settings.orientation><settings.space><TCEforms><label><![CDATA[Abstand]]></label><config>
	<type>select</type>
	<items type="array">
		<numIndex index="0" type="array">
			<numIndex index="0">Normal</numIndex>
			<numIndex index="1">0</numIndex>
		</numIndex>
		<numIndex index="1" type="array">
			<numIndex index="0">Eng</numIndex>
			<numIndex index="1">1</numIndex>
		</numIndex>
	</items>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
</config>
<!-- <onChange>reload</onChange> -->
</TCEforms></settings.space></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid1_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid1_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid1']['showitem'] = '--palette--;;dce_palette_dce_dceuid1_head,
--palette--;;dce_palette_dce_dceuid1,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid1']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid1']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Content Text/Bild',
        'dce_dceuid2',
        'content-textpic',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_dceuid2'] = 'content-textpic';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid2'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid2'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle><type>array</type><el><settings.title><TCEforms><label><![CDATA[Titel]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim</eval>
</config></TCEforms></settings.title><settings.text><TCEforms><label><![CDATA[Text]]></label><config>
	<type>text</type>
	<rows>5</rows>
	<cols>30</cols>
	<eval>trim</eval>
	<enableRichtext>1</enableRichtext>
	<richtextConfiguration>default</richtextConfiguration>
</config>
</TCEforms></settings.text><settings.image><TCEforms><label><![CDATA[Bild]]></label><config>
	<type>inline</type>
	<foreign_table>sys_file_reference</foreign_table>
	<foreign_field>uid_foreign</foreign_field>
	<foreign_sortby>sorting_foreign</foreign_sortby>
	<foreign_table_field>tablenames</foreign_table_field>
	<foreign_match_fields>
		<fieldname>image</fieldname>
	</foreign_match_fields>
	<foreign_label>uid_local</foreign_label>
	<foreign_selector>uid_local</foreign_selector>
	<foreign_selector_fieldTcaOverride>
		<config>
			<appearance>
				<elementBrowserType>file</elementBrowserType>
				<elementBrowserAllowed>gif,jpg,jpeg,png</elementBrowserAllowed>
			</appearance>
		</config>
	</foreign_selector_fieldTcaOverride>
	<foreign_types type="array">
		<numIndex index="2">
			<showitem>--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,--palette--;;filePalette</showitem>
		</numIndex>
	</foreign_types>

	<minitems>1</minitems>
	<maxitems>1</maxitems>

	<appearance>
		<useSortable>1</useSortable>
		<headerThumbnail>
			<field>uid_local</field>
			<width>45c</width>
			<height>45</height>
		</headerThumbnail>

		<showPossibleLocalizationRecords>0</showPossibleLocalizationRecords>
		<showRemovedLocalizationRecords>0</showRemovedLocalizationRecords>
		<showSynchronizationLink>0</showSynchronizationLink>
		<useSortable>1</useSortable>
		<enabledControls>
			<info>1</info>
			<new>0</new>
			<dragdrop>0</dragdrop>
			<sort>1</sort>
			<hide>1</hide>
			<delete>1</delete>
			<localize>1</localize>
		</enabledControls>

		<createNewRelationLinkTitle>LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference</createNewRelationLinkTitle>
	</appearance>

	<behaviour>
		<localizationMode>select</localizationMode>
		<localizeChildrenAtParentLocalization>1</localizeChildrenAtParentLocalization>
	</behaviour>

	<dce_load_schema>1</dce_load_schema>
	<dce_get_fal_objects>1</dce_get_fal_objects>
</config>
</TCEforms></settings.image><settings.orientation><TCEforms><label><![CDATA[Ausrichtung Text]]></label><config>
	<type>select</type>
	<items type="array">
		<numIndex index="0" type="array">
			<numIndex index="0">Rechts</numIndex>
			<numIndex index="1">is-ltr</numIndex>
		</numIndex>
		<numIndex index="1" type="array">
			<numIndex index="0">Links</numIndex>
			<numIndex index="1">is-rtl</numIndex>
		</numIndex>
	</items>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
</config>
<!-- <onChange>reload</onChange> -->
</TCEforms></settings.orientation><settings.offset><TCEforms><label><![CDATA[Offset]]></label><config>
	<type>select</type>
	<items type="array">
		<numIndex index="0" type="array">
			<numIndex index="0">Kein</numIndex>
			<numIndex index="1">none</numIndex>
		</numIndex>
		<numIndex index="1" type="array">
			<numIndex index="0">Unten</numIndex>
			<numIndex index="1">is-offset-bottom</numIndex>
		</numIndex>
		<numIndex index="2" type="array">
			<numIndex index="0">Oben</numIndex>
			<numIndex index="1">is-offset-top</numIndex>
		</numIndex>
	</items>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
</config>
<!-- <onChange>reload</onChange> -->
</TCEforms></settings.offset><settings.theme><TCEforms><label><![CDATA[Hintergrund]]></label><config>
	<type>select</type>
	<items type="array">
		<numIndex index="0" type="array">
			<numIndex index="0">Weiss</numIndex>
			<numIndex index="1">is-white</numIndex>
		</numIndex>
		<numIndex index="1" type="array">
			<numIndex index="0">Blau</numIndex>
			<numIndex index="1">is-blue</numIndex>
		</numIndex>
		<numIndex index="2" type="array">
			<numIndex index="0">Grau</numIndex>
			<numIndex index="1">is-grey</numIndex>
		</numIndex>
	</items>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
</config>
<!-- <onChange>reload</onChange> -->
</TCEforms></settings.theme><settings.anchor><TCEforms><label><![CDATA[Anchor]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim</eval>
</config></TCEforms></settings.anchor></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid2_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid2_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid2']['showitem'] = '--palette--;;dce_palette_dce_dceuid2_head,
--palette--;;dce_palette_dce_dceuid2,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid2']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid2']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Content Team',
        'dce_dceuid3',
        'content-textpic',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_dceuid3'] = 'content-textpic';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid3'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid3'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle><type>array</type><el><settings.department><TCEforms><label><![CDATA[Abteilung]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config></TCEforms></settings.department><settings.members><title><![CDATA[Teammitglied]]></title><tx_templatevoila><title><![CDATA[Teammitglied]]></title></tx_templatevoila><section>1</section><type>array</type><el><container_members><type>array</type><title><![CDATA[Mitglied]]></title><tx_templatevoila><title><![CDATA[Teammitglied]]></title></tx_templatevoila><el><name><TCEforms><label><![CDATA[Name]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config></TCEforms></name><firstname><TCEforms><label><![CDATA[Vorname]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config></TCEforms></firstname><info><TCEforms><label><![CDATA[Info]]></label><config>
	<type>text</type>
	<rows>5</rows>
	<cols>30</cols>
	<eval>trim,required</eval>
	<enableRichtext>1</enableRichtext>
	<richtextConfiguration>default</richtextConfiguration>
</config>
</TCEforms></info><image><TCEforms><label><![CDATA[Bild]]></label><config>
	<type>group</type>
	<internal_type>db</internal_type>
	<appearance>
		<elementBrowserType>file</elementBrowserType>
		<elementBrowserAllowed>gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg</elementBrowserAllowed>
	</appearance>
	<allowed>sys_file</allowed>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
	<show_thumbs>1</show_thumbs>

	<dce_load_schema>1</dce_load_schema>
	<dce_get_fal_objects>1</dce_get_fal_objects>
</config>
</TCEforms></image></el></container_members></el></settings.members></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid3_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid3_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid3']['showitem'] = '--palette--;;dce_palette_dce_dceuid3_head,
--palette--;;dce_palette_dce_dceuid3,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid3']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid3']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Content Geschichte',
        'dce_dceuid4',
        'content-textpic',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_dceuid4'] = 'content-textpic';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid4'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid4'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle><type>array</type><el><settings.title><TCEforms><label><![CDATA[Titel]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim</eval>
</config></TCEforms></settings.title><settings.text><TCEforms><label><![CDATA[Text]]></label><config>
	<type>text</type>
	<rows>5</rows>
	<cols>30</cols>
	<eval>trim</eval>
	<enableRichtext>1</enableRichtext>
	<richtextConfiguration>default</richtextConfiguration>
</config>
</TCEforms></settings.text><settings.image><TCEforms><label><![CDATA[Bild]]></label><config>
	<type>inline</type>
	<foreign_table>sys_file_reference</foreign_table>
	<foreign_field>uid_foreign</foreign_field>
	<foreign_sortby>sorting_foreign</foreign_sortby>
	<foreign_table_field>tablenames</foreign_table_field>
	<foreign_match_fields>
		<fieldname>image</fieldname>
	</foreign_match_fields>
	<foreign_label>uid_local</foreign_label>
	<foreign_selector>uid_local</foreign_selector>
	<foreign_selector_fieldTcaOverride>
		<config>
			<appearance>
				<elementBrowserType>file</elementBrowserType>
				<elementBrowserAllowed>gif,jpg,jpeg,png</elementBrowserAllowed>
			</appearance>
		</config>
	</foreign_selector_fieldTcaOverride>
	<foreign_types type="array">
		<numIndex index="2">
			<showitem>--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,--palette--;;filePalette</showitem>
		</numIndex>
	</foreign_types>

	<minitems>1</minitems>
	<maxitems>1</maxitems>

	<appearance>
		<useSortable>1</useSortable>
		<headerThumbnail>
			<field>uid_local</field>
			<width>45c</width>
			<height>45</height>
		</headerThumbnail>

		<showPossibleLocalizationRecords>0</showPossibleLocalizationRecords>
		<showRemovedLocalizationRecords>0</showRemovedLocalizationRecords>
		<showSynchronizationLink>0</showSynchronizationLink>
		<useSortable>1</useSortable>
		<enabledControls>
			<info>1</info>
			<new>0</new>
			<dragdrop>0</dragdrop>
			<sort>1</sort>
			<hide>1</hide>
			<delete>1</delete>
			<localize>1</localize>
		</enabledControls>

		<createNewRelationLinkTitle>LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference</createNewRelationLinkTitle>
	</appearance>

	<behaviour>
		<localizationMode>select</localizationMode>
		<localizeChildrenAtParentLocalization>1</localizeChildrenAtParentLocalization>
	</behaviour>

	<dce_load_schema>1</dce_load_schema>
	<dce_get_fal_objects>1</dce_get_fal_objects>
</config>
</TCEforms></settings.image><settings.orientation><TCEforms><label><![CDATA[Ausrichtung Text]]></label><config>
	<type>select</type>
	<items type="array">
		<numIndex index="0" type="array">
			<numIndex index="0">Rechts</numIndex>
			<numIndex index="1">is-ltr</numIndex>
		</numIndex>
		<numIndex index="1" type="array">
			<numIndex index="0">Links</numIndex>
			<numIndex index="1">is-rtl</numIndex>
		</numIndex>
	</items>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
</config>
<!-- <onChange>reload</onChange> -->
</TCEforms></settings.orientation><settings.offset><TCEforms><label><![CDATA[Offset]]></label><config>
	<type>select</type>
	<items type="array">
		<numIndex index="0" type="array">
			<numIndex index="0">Kein</numIndex>
			<numIndex index="1">none</numIndex>
		</numIndex>
		<numIndex index="1" type="array">
			<numIndex index="0">Unten</numIndex>
			<numIndex index="1">is-offset-bottom</numIndex>
		</numIndex>
		<numIndex index="2" type="array">
			<numIndex index="0">Oben</numIndex>
			<numIndex index="1">is-offset-top</numIndex>
		</numIndex>
	</items>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
</config>
<!-- <onChange>reload</onChange> -->
</TCEforms></settings.offset><settings.theme><TCEforms><label><![CDATA[Hintergrund]]></label><config>
	<type>select</type>
	<items type="array">
		<numIndex index="0" type="array">
			<numIndex index="0">Weiss</numIndex>
			<numIndex index="1">is-white</numIndex>
		</numIndex>
		<numIndex index="1" type="array">
			<numIndex index="0">Blau</numIndex>
			<numIndex index="1">is-blue</numIndex>
		</numIndex>
		<numIndex index="2" type="array">
			<numIndex index="0">Grau</numIndex>
			<numIndex index="1">is-grey</numIndex>
		</numIndex>
	</items>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
</config>
<!-- <onChange>reload</onChange> -->
</TCEforms></settings.theme><settings.anchor><TCEforms><label><![CDATA[Anchor]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim</eval>
</config></TCEforms></settings.anchor><settings.years><title><![CDATA[Jahre]]></title><tx_templatevoila><title><![CDATA[Jahre]]></title></tx_templatevoila><section>1</section><type>array</type><el><container_years><type>array</type><title><![CDATA[Jahr]]></title><tx_templatevoila><title><![CDATA[Jahre]]></title></tx_templatevoila><el><year><TCEforms><label><![CDATA[Jahr]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config></TCEforms></year><text><TCEforms><label><![CDATA[Text]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config></TCEforms></text></el></container_years></el></settings.years></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid4_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid4_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid4']['showitem'] = '--palette--;;dce_palette_dce_dceuid4_head,
--palette--;;dce_palette_dce_dceuid4,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid4']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid4']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Content Teaser',
        'dce_dceuid5',
        'content-textpic',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_dceuid5'] = 'content-textpic';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid5'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid5'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle><type>array</type><el><settings.teasers><title><![CDATA[Teasers]]></title><tx_templatevoila><title><![CDATA[Teasers]]></title></tx_templatevoila><section>1</section><type>array</type><el><container_teasers><type>array</type><title><![CDATA[Teaser]]></title><tx_templatevoila><title><![CDATA[Teasers]]></title></tx_templatevoila><el><image><TCEforms><label><![CDATA[Bild]]></label><config>
	<type>group</type>
	<internal_type>db</internal_type>
	<appearance>
		<elementBrowserType>file</elementBrowserType>
		<elementBrowserAllowed>gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg</elementBrowserAllowed>
	</appearance>
	<allowed>sys_file</allowed>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
	<show_thumbs>1</show_thumbs>

	<dce_load_schema>1</dce_load_schema>
	<dce_get_fal_objects>1</dce_get_fal_objects>
</config>
</TCEforms></image><links><TCEforms><label><![CDATA[Links]]></label><config>
	<type>text</type>
	<rows>5</rows>
	<cols>30</cols>
	<eval>trim,required</eval>
	<enableRichtext>1</enableRichtext>
	<richtextConfiguration>default</richtextConfiguration>
</config>
</TCEforms></links></el></container_teasers></el></settings.teasers></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid5_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid5_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid5']['showitem'] = '--palette--;;dce_palette_dce_dceuid5_head,
--palette--;;dce_palette_dce_dceuid5,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid5']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_dceuid5']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';



#
