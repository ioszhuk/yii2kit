<?php

namespace common\models\settings;

use Yii;

class SiteConfigSettings extends Settings
{
    public static $SECTION = 'SiteConfigSettings';

    public $address_ru;
    public $address_en;
    public $email;
    public $admin_email;
    public $phone;

    public function attributeLabels()
    {
        return [
            'address_ru' => 'Адрес (RU)',
            'address_en' => 'Адрес (EN)',
            'email' => 'Email',
            'admin_email' => 'Email (для форм)',
            'phone' => 'Телефоны',
        ];
    }

    public function rules()
    {
        return [
            [['address_ru', 'address_en', 'email', 'admin_email'], 'string'],
            [['phone'], 'each', 'rule' => ['safe']]
        ];
    }

    public function init()
    {
        parent::init();

        $settings = Yii::$app->settings;

        $this->address_ru = $settings->get('address_ru', self::$SECTION);
        $this->address_en = $settings->get('address_en', self::$SECTION);

        $this->email = $settings->get('email', self::$SECTION);

        $this->admin_email = $settings->get('admin_email', self::$SECTION);

        if( ($phone = unserialize($settings->get('phone', self::$SECTION))) ) {
            $this->phone = $phone;
        } else {
            $this->phone = [];
        }
    }

    public function save()
    {
        $settings = Yii::$app->settings;

        $settings->set('address_ru', $this->address_ru, self::$SECTION, 'string');
        $settings->set('address_en', $this->address_en, self::$SECTION, 'string');

        $settings->set('email', $this->email, self::$SECTION, 'string');

        $settings->set('admin_email', $this->admin_email, self::$SECTION, 'string');

        $settings->set('phone', serialize($this->phone), self::$SECTION, 'string');

        return true;
    }
}