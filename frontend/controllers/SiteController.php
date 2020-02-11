<?php
namespace frontend\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'main',
            ]
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        return 'home';
    }

}
