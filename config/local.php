<?php
/**
 * Конфиг для дев-окружения.
 * Здесь можно настроить вывод ошибок и т.п.
 */

return [
    'bootstrap' => ['log', 'debug', 'gii'],
    'components' => [
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'assetManager' => [
            'appendTimestamp' => true,
            'forceCopy' => true,
        ],
    ],
    'modules' => [
        'debug' => 'yii\debug\Module',
        'gii' => 'yii\gii\Module',
    ],
];