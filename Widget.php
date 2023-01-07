<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */


namespace harrytang\bootstrapsocial;


/**
 * Class Widget
 * @package harrytang\bootstrapsocial
 */
class Widget extends \yii\base\Widget
{
    public $options = [];

    public function init()
    {
        parent::init();
        $this->register();
    }

    /**
     * register asset
     */
    protected function register()
    {
        $view = $this->getView();
        FontawesomeAsset::register($view);
        BootstrapsocialAsset::register($view);
    }
}
