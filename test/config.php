<?php
return [
    'id' => 'basic',
    'basePath' => dirname(__DIR__ . '/test'),
    'extensions' => require __DIR__ . '/../vendor/yiisoft/extensions.php',
    'bootstrap' => ['log'],

    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],

        'log' => [
            'class' => 'yii\log\Dispatcher',
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'alexdin\restlog\RestFileTarget',
                    //'logFile' => '@runtime/logs/app.log',
                ],
            ],
        ],
    ],
];