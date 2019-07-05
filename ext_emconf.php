<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Fluid Bootstrap Grids',
    'description' => 'Extends gridelements to create bootstrap grids the easy way.',
    'category' => 'plugin',
    'author' => 'Jonas Esser',
    'author_email' => 'j.esser@tmg-web.de',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'gridelements' => '9.2.0-9.2.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
