<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:at_cakezone/Configuration/PageTSconfig/setup.typoscript">');

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:at_cakezone/Configuration/RTE/Default.yaml';

// Set default values if not already set by the backend
if (empty($GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename']) || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] == "New TYPO3 Project" || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] == "New TYPO3 site") {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'Cakezone';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'] = 'EXT:at_cakezone/Resources/Public/images/Favicon/logo.png';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] = 'EXT:at_cakezone/Resources/Public/images/Favicon/logo.png';
}
