<?php

$_EXTKEY = 'FriendsOfTYPO3/headless_bootstrap_package';

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Bootstrap Package',
    'description' => 'This extension provides integration with bootstrap package to output content from TYPO3 in JSON format.',
    'state' => 'beta',
    'author' => 'Łukasz Uznański, A. Reinhard',
    'author_email' => 'extensions@macopedia.com, alex@koeln.de',
    'category' => 'fe',
    'internal' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'frontend' => '9.5.0-10.4.99'
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '2.0.0-2.9.9'
        ]
    ],
];
