<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\themes\basic\components;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/basic/assets';
    public $css = [
        'css/style.css',
    ];
    public $js = [
        'js/modernizr/modernizr.js',
        'js/caplet.custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'frontend\themes\basic\components\PluginAsset',
    ];
}