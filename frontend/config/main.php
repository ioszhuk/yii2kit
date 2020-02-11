<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'languages'],
    'language' => 'ru_ru',
    'controllerNamespace' => 'frontend\controllers',
    'on beforeRequest' => function () {
        \noIT\seo\helpers\RedirectHelper::beforeRequest();
    },
    'components' => [
        'request' => [
            'class' => 'common\components\Request', // custom
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
        ],
        'i18n' => [
            'class' => 'yii\i18n\I18N',
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'fileMap' => [
                        'app'  => 'app.php',
                    ],
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class' => 'common\components\UrlManager',  // custom
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require (__DIR__ . '/routes.php'),
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,
                    'basePath' => '@webroot',
                    'baseUrl' => '@web',
                    'js' => [
                        'js/jquery.min.js',
                        'js/jquery.cookie.js',
                        'js/jquery.mask.min.js',
                        'js/blazy.min.js',
                        'https://cdn.jsdelivr.net/npm/sweetalert2@8',
                    ]
                ]
            ]
        ],
        'siteSettingsComponent' => [
            'class' => 'frontend\components\SiteSettingsComponent'
        ],
    ],
    'modules' => [
        'languages' => [
            'class' => 'common\modules\languages\Module',  // custom
            'languages' => [
                'ru' => 'ru',
                'en' => 'en',
            ],
            'default_language' => 'ru',
            'show_default' => false,
        ],
    ],
    'params' => $params,
];
