<?php
namespace common\modules\languages\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class LanguageWidget extends Widget
{
    public $array_languages;

    public function init()
    {

        $current_language = Yii::$app->language;

        $languages = Yii::$app->getModule('languages')->languages;

        $array_lang = [];

        foreach ($languages as $key => $value) {

            if($languages[$current_language] != $value) {

                $label = ($value === 'ru') ? 'rus' : 'eng';

                $array_lang += [$value => Html::a(ucfirst($label), ['languages/default/index', 'lang' => $value])];

            }

        }

        $this->array_languages = $array_lang;
    }

    /**
     * @return string
     */
    public function run()
    {
        return $this->render('list',[
            'array_lang' => $this->array_languages
        ]);
    }

}