<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic-ext,latin-ext',
        'metronic-admin/vendors/custom/fullcalendar/fullcalendar.bundle.css?345643',
        'metronic-admin/vendors/base/vendors.bundle.css?345643',
        'metronic-admin/demo/default/base/style.bundle.css?345643',
        'metronic-admin/custom/css/style.css?345643',
    ];

    public $js = [
        'metronic-admin/custom/js/metronic-custom.js?345643',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
