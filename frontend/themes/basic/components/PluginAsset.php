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
class PluginAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/basic/assets';
    public $css = [
        'css/bootstrap/bootstrap.min.css',
        'css/bootstrap/bootstrap-themes.css',
        'plugins/owl-carousel/owl.carousel.css',
        'plugins/owl-carousel/owl.theme.css',
        'plugins/owl-carousel/owl.transitions.css',
        'plugins/slide/css/settings.css',
        'plugins/fancybox/jquery.fancybox.css'
    ];
    public $js = [
        'plugins/bootstrap/bootstrap.min.js',
        'plugins/owl-carousel/owl.carousel.js',
        'plugins/slide/js/jquery.themepunch.plugins.min.js',
        'plugins/slide/js/jquery.themepunch.revolution.min.js',
        'plugins/selectnav/selectnav.min.js',
        'plugins/fancybox/jquery.fancybox.js',
        'plugins/form/form.js'
    ];
}
