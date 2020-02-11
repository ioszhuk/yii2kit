<?php

namespace common\models\settings;

use Yii;

class ContactsSettings extends Settings
{
    public static $SECTION = 'ContactsSettings';

    public $title_ru;
    public $title_en;

    public $description_ru;
    public $description_en;

    public $content_ru;
    public $content_en;

    public function attributeLabels()
    {
        return [
            'content_ru' => 'Описание (Русский)',
            'content_en' => 'Описание (English)',
            'title_ru' => 'SEO Title (Русский)',
            'title_en' => 'SEO Title (English)',
            'description_ru' => 'SEO Description (Русский)',
            'description_en' => 'SEO Description (English)',
        ];
    }

    public function rules()
    {
        return [
            [['content_ru', 'content_en'], 'each', 'rule' => ['safe']],
            [['title_ru', 'title_en', 'description_ru', 'description_en'], 'string'],
        ];
    }

    public function init()
    {
        parent::init();

        $settings = Yii::$app->settings;

        $this->content_ru = $settings->get('content_ru', self::$SECTION);
        $this->content_en = $settings->get('content_en', self::$SECTION);

        $this->title_ru = $settings->get('title_ru', self::$SECTION);
        $this->title_en = $settings->get('title_en', self::$SECTION);

        $this->description_ru = $settings->get('description_ru', self::$SECTION);
        $this->description_en = $settings->get('description_en', self::$SECTION);
    }

    /**
     * @return bool
     */
    public function save()
    {
        $settings = Yii::$app->settings;

        $settings->set('content_ru', $this->content_ru, self::$SECTION, 'string');
        $settings->set('content_en', $this->content_en, self::$SECTION, 'string');

        $settings->set('title_ru', $this->title_ru, self::$SECTION, 'string');
        $settings->set('title_en', $this->title_en, self::$SECTION, 'string');

        $settings->set('description_ru', $this->description_ru, self::$SECTION, 'string');
        $settings->set('description_en', $this->description_en, self::$SECTION, 'string');

        return true;
    }
}