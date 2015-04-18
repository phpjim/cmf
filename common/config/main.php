<?php
$moduleConfigPath = dirname(__FILE__) . '/modules';
$modules = scandir($moduleConfigPath);
$moduleConfig = [];

foreach ($modules as $module) {
    if (preg_match('/.php/', $module)) {
        $moduleConfig[] = require($moduleConfigPath . "/" . $module);
    }
}

$mainConfig = [
    'language' => 'en',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        'i18n' => [
//            'translations' => [
//                'app*' => [
//                    'class' => 'yii\i18n\PhpMessageSource',
//                    'basePath' => '@app/themes/basic/messages',
//                    'sourceLanguage' => 'en-US',
//                    'fileMap' => [
//                        'app' => 'app.php',
//                        'app/error' => 'error.php'
//                    ]
//                ]
//            ]
//        ],
//        'urlManager' => [
//            'class' => 'common\components\LangUrlManager',
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'enableStrictParsing' => false,
//            'suffix' => '.html'
//        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning']
                ]
            ]
        ],
//        'request' => [
//            'class' => 'common\components\LangRequest'
//        ]
    ],
    'timeZone' => 'Europe/Riga'
];

$moduleConfig[] = $mainConfig;
if (count($moduleConfig) > 1) {
    $config = forward_static_call_array('yii\helpers\ArrayHelper::merge', $moduleConfig);
} else {
    $config = $mainConfig;
}


return $config;
