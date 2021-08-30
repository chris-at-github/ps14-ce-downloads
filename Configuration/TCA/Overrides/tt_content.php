<?php

// ---------------------------------------------------------------------------------------------------------------------
// Download Module von TT-Content
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:ce_downloads/Resources/Private/Language/locallang_tca.xlf:tx_ce_downloads.title',
		'ce_downloads',
		'content-special-uploads'
	),
	'CType',
	'ce_downloads'
);

$GLOBALS['TCA']['tt_content']['types']['ce_downloads'] = [
	'showitem' => '
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;xoHeader, bodytext, tx_xo_file,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
			--palette--;;hidden,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
	',
];

$GLOBALS['TCA']['tt_content']['types']['ce_downloads']['columnsOverrides']['bodytext']['config'] = [
	'enableRichtext' => true,
	'richtextConfiguration' => 'xoDefault',
];

$GLOBALS['TCA']['tt_content']['types']['ce_downloads']['columnsOverrides']['tx_xo_file']['config'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
	'tx_xo_file',
	[
		'appearance' => [
			'collapseAll' => 1,
			'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
		],
		'overrideChildTca' => [
			'types' => [
				'0' => [
					'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,
							--palette--;;filePalette'
				],
				\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
					'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,
							--palette--;;filePalette'
				],
				\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
					'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,
							--palette--;;filePalette'
				]
			]
		],
		'maxitems' => 99
	]
);