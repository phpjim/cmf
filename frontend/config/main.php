<?php
$moduleConfigPath = dirname(__FILE__) . '/modules';
$modules = scandir($moduleConfigPath);
$moduleConfig = [];

foreach ($modules as $module) {
    if (preg_match('/.php/', $module)) {
        $moduleConfig[] = require($moduleConfigPath . "/" . $module);
    }
}

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$mainConfig = [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'view' => [
            'theme' => [
                'class' => 'frontend\themes\basic\components\Theme',
                'pathMap' => [
                    '@app/views' => '@app/themes/basic/views',
                    '@app/modules' => '@app/themes/basic/modules',
                ],
                'baseUrl' => '@web/themes/basic',
            ]
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'class' => 'yii\web\JqueryAsset',
                    'js' => [],
                    'depends' => ['frontend\themes\basic\components\JqueryAsset'],
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'class' => 'yii\bootstrap\BootstrapPluginAsset',
                    'js' => [],
                    'depends' => []
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'class' => 'yii\bootstrap\BootstrapAsset',
                    'css' => [],
                    'depends' => []
                ]
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            //'class' => 'common\components\LangUrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'suffix' => '.html'
        ],
        'request' => [
            //'class' => 'common\components\LangRequest'
        ]
    ],
    'params' => $params
];

$moduleConfig[] = $mainConfig;
if (count($moduleConfig) > 1) {
    $config = forward_static_call_array('yii\helpers\ArrayHelper::merge', $moduleConfig);
} else {
    $config = $mainConfig;
}


return $config;
