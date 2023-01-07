<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

/**
 * @link http://lipis.github.io/bootstrap-social/
 */
namespace harrytang\bootstrapsocial;


use yii\web\AssetBundle;

/**
 * Class BootstrapsocialAsset
 * @package harrytang\bootstrapsocial
 */
class BootstrapsocialAsset extends AssetBundle
{
    public $sourcePath = '@vendor/harrytang/yii2-bootstrapsocial/assets';
    public $css = [
        'bootstrap-social.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

} 