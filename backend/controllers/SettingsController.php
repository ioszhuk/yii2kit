<?php
namespace backend\controllers;

use common\models\settings\ContactsSettings;
use common\models\settings\ProductSizeTableSettings;
use common\models\settings\SiteConfigSettings;
use common\models\settings\SocialGroupSettings;
use yii\web\Controller;
use Yii;

class SettingsController extends Controller
{
    public function actionSocialGroupSettings()
    {
        $model = new SocialGroupSettings();

        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->refresh();
        }

        return $this->render('social-group-settings', ['model' => $model]);
    }

    public function actionSiteConfigSettings()
    {
        $model = new SiteConfigSettings();

        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->refresh();
        }

        return $this->render('site-config-settings', ['model' => $model]);
    }

    public function actionContactsSettings()
    {
        $model = new ContactsSettings();

        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->refresh();
        }

        return $this->render('contacts-settings', ['model' => $model]);
    }

    public function actionProductSizeTableSettings()
    {
        $model = new ProductSizeTableSettings();

        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->refresh();
        }

        return $this->render('product-size-table-settings', ['model' => $model]);
    }
}