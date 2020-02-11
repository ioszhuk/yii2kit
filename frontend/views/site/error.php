<?php

/**
 * @var $this View
 * @var $summary string
 */

use yii\web\View;
use yii\helpers\Url;

$lang = Yii::$app->language;

$model = [
    'ru' => [
        'title' => 'Ошибка 404',
        'summary' => 'Страница не найдена!',
    ],
    'en' => [
        'title' => 'Error 404',
        'summary' => 'Page not found!',
    ],
];

$this->title = $model[$lang]['title'];

?>
<h1><?= $model[$lang]['title'] ?></h1>
<p><?= $model[$lang]['summary'] ?></p>