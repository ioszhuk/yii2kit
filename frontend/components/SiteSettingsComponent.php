<?php
namespace frontend\components;

use common\models\Cart;
use Yii;
use \yii\base\Component;

class SiteSettingsComponent extends Component
{
    public static $SECTION = 'SiteSettings';

    public function getPhones()
    {
        if( ($phone = unserialize(Yii::$app->settings->get('phone', 'SiteConfigSettings'))) ) {
            return $phone;
        } else {
            return [];
        }
    }

    public function getEmail()
    {
        return Yii::$app->settings->get('email', 'SiteConfigSettings');
    }

    public function getAdminEmail()
    {
        return Yii::$app->settings->get('admin_email', 'SiteConfigSettings');
    }

    public function getAddress()
    {
        $language = Yii::$app->language;

        return Yii::$app->settings->get("address_{$language}", 'SiteConfigSettings');
    }

    public function getSocialNetwork()
    {
        if( ($social_networks = unserialize(Yii::$app->settings->get('social_network', 'SocialGroupSettings'))) ) {
            return $social_networks;
        } else {
            return [];
        }
    }

    public function getCartSize()
    {
        return Cart::getProductsQuantity();
    }
}