<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/normalize.css',
        'css/bootstrap-grid.min.css',
        'css/styles.css',
    ];

    public $cssOptions = [
        'type' => 'text/css',
    ];
    public $js = [
        'js/common.js',
        'libs/jQuery/jquery-3.3.1.min.js',
        'libs/slick/slick.js',
        'libs/Chart.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];

}
