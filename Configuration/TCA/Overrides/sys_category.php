<?php

$GLOBALS['TCA']['sys_category']['columns']['tx_categorizedcontent_image'] = [
    'label' => 'Image',
    'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('tx_categorizedcontent_image'),
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_category', 'tx_categorizedcontent_image', '', 'after:parent');
