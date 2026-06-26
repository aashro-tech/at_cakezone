<?php

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default']
    = 'EXT:at_cakezone/Configuration/RTE/Default.yaml';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formPersistenceManager']['allowedFileMounts'][] =
'EXT:at_cakezone/Configuration/Form/';

// Set default values if not already set by the backend
if (
    empty($GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'])
    || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] === 'New TYPO3 Project'
    || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] === 'New TYPO3 site'
) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'Cakezone';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo']
        = 'EXT:at_cakezone/Resources/Public/images/Favicon/logo.png';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo']
        = 'EXT:at_cakezone/Resources/Public/images/Favicon/logo.png';
}