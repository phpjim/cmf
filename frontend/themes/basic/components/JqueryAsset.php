<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\themes\basic\components;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the [jquery javascript library](http://jquery.com/)
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class JqueryAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/basic/assets';
    public $js = [
        'js/jquery.min.js',
        'js/jquery.ui.min.js',
    ];
}

