<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/style.min.css?9875142184613',
        'css/default.min.css?9875142184613',
        'css/nice-select.css?9875142184613',
        'custom/custom.min.css?9875142184613',
    ];

    public $js = [
        'js/scripts.js?9875142184613',
        'custom/cart.js?9875142184613',
        'custom/app.js?9875142184613',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
