<?php
/**
 * Created by PhpStorm.
 * User: TpY
 * Date: 28.01.2015
 * Time: 9:39
 */

namespace common\components;

use yii\base\Module as YiiModule;

class Module extends YiiModule {
    private $_viewPath;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @inheritdoc
     */
//    public function getViewPath()
//    {
//        if ($this->_viewPath !== null) {
//            return $this->_viewPath;
//        } else {
//            return $this->_viewPath = $this->getBasePath();
//        }
//    }

    /**
     * @inheritdoc
     */
//    public function setViewPath($path)
//    {
//        $this->_viewPath = Yii::getAlias($path);
//    }

} 