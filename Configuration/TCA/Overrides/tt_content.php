<?php

// ---------------------------------------------------------------------------------------------------------------------
// Download Module von TT-Content
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:ce_downloads/Resources/Private/Language/locallang_tca.xlf:tx_ce_downloads.title',
		'ce_downloads',
		'ps14-content-downloads'
	),
	'CType',
	'ce_downloads'
);

$GLOBALS['TCA']['tt_content']['types']['ce_downloads'] = [
	'showitem' => '
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;xoHeader, tx_xo_elements,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
			--palette--;;hidden,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
	',
];

$GLOBALS['TCA']['tt_content']['types']['ce_downloads']['columnsOverrides']['tx_xo_elements']['config']['overrideChildTca'] = [
	'columns' => [
		'record_type' => [
			'config' => [
				'items' => [
					['LLL:EXT:ce_downloads/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.record_type.default', 'ce_downloads_default'],
				],
				'default' => 'ce_downloads_default'
			]
		],
	],
	'types' => [
		'ce_downloads_default' => [
			'showitem' => '
				l10n_diffsource, record_type, --palette--;;header, description, files
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
				--palette--;;visibility,
				--palette--;;access',
		],
	]
];