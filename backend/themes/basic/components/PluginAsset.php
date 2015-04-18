<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\themes\basic\components;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PluginAsset extends AssetBundle
{
    public $sourcePath = '@backend/themes/basic/assets';
    public $css = [
        'css/bootstrap/bootstrap.min.css',
        'css/bootstrap/bootstrap-themes.css',
    ];
    public $js = [
        'plugins/bootstrap/bootstrap.min.js',
        'plugins/mmenu/jquery.mmenu.js',
        'js/styleswitch.js',
        'plugins/form/form.js',
        'plugins/datetime/datetime.js',
        'plugins/chart/chart.js',
        'plugins/pluginsForBS/pluginsForBS.js',
        'plugins/miscellaneous/miscellaneous.js',
        'plugins/ckeditor/ckeditor.js'
    ];
}
?>
