<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[AASHRO] Cakezone TYPO3 Template',
    'description' => 'Modern TYPO3 v13 bakery template built with Content Blocks for showcasing cakes, menus, and bakery services.',
    'category' => 'templates',
    'author' => 'Team AASHRO',
    'author_email' => 'info@aashro.com',
    'author_company' => 'AASHRO Tech',
    'state' => 'stable',
    'uploadfolder' => false,
    'clearcacheonload' => false,
    'version' => '1.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.99.99',
            'content_blocks' => '',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];