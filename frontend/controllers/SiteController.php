<?php
namespace frontend\controllers;

use common\models\Home;
use Yii;
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
        $model = Home::findOne(Home::SINGLETON);

        return $this->render('index', ['model' => $model]);
    }

    /**
     * @return string
     */
    public function actionContacts()
    {
        $lang = Yii::$app->language;

        $content = Yii::$app->settings->get("content_{$lang}", 'ContactsSettings');
        $title = Yii::$app->settings->get("title_{$lang}", 'ContactsSettings');
        $description = Yii::$app->settings->get("description_{$lang}", 'ContactsSettings');

        return $this->render('contacts', [
            'content' => $content,
            'title' => $title,
            'description' => $description,
        ]);
    }
}
