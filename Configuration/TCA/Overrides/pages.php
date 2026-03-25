<?php
defined('TYPO3') or die();

$newColumns = [
    'footer_margin' => [
        'exclude' => true,
        'label' => 'Footer Margin',
        'description' => 'Defines the space between the page content and the footer. Enter value in pixels.',
        'config' => [
            'type' => 'input',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $newColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'footer_margin',
    '',
    'after:rowDescription'
);
