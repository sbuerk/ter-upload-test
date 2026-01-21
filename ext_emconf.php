<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Dummy Extension - TER Upload Test',
    'description' => '',
    'category' => 'backend',
    'author' => 'Stefan Bürk',
    'author_company' => 'web-vision GmbH',
    'author_email' => 'stefan@buerk.tech',
    'state' => 'stable',
    'version' => '0.0.4',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.4.99',
            'typo3' => '12.4.0-13.4.99',
            'backend' => '12.4.0-13.4.99',
            'extbase' => '12.4.0-13.4.99',
            'fluid' => '12.4.0-13.4.99',
            'setup' => '12.4.0-13.4.99',
        ],
        'conflicts' => [
            'ai_translate' => '*',
            'dd_deepl' => '*',
            'deepltranslate' => '*'
        ],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'DeepL\\' => 'vendor/deeplcom/deepl-php/src',
            'Http\\Discovery\\' => 'vendor/php-http/discovery/src',
        ],
    ],
];
