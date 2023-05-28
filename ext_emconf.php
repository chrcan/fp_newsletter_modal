<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Newsletter subscriber management Modal',
    'description' => 'Shows a fp_newsletter registration form in a modal',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fp_newsletter' => '4.1.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
