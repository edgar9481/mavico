<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SistemaChido extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
                'new/css/bootstrap-theme.css',
                'new/css/bootstrap-theme.css.map',
                'new/css/bootstrap-theme.min.css',
                'new/css/bootstrap.css',
                'new/css/bootstrap.css.map',
                'new/css/bootstrap.min.css',
                'new/css/fontAwesome.css',
                'new/css/hero-slider.css',
                'new/css/ligthbox.css',
                'new/css/owl-carousel.css',
                'new/css/templatemo-style.css'
    ];
    public $js = [
                'new/js/main.js',
                'new/js/plugins.js',
                'new/js/vendor/bootstrap.min. js',
                'new/js/vendor/bootstrap.js',
                'new/js/vendor/jquery-1.11.2.min.js',
                'new/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
                'new/js/vendor/npm.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}