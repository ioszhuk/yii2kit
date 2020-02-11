<?php

use yii\helpers\Html;
use noIT\core\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\settings\ContactsSettings */

$this->title = 'Контакты стр.';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['settings/contacts-settings']];

?>

<?php $form = ActiveForm::begin(); ?>

    <div class="custom-form-section">

        <div class="custom-form-section-box">

            <div class="row justify-content-between">
                <div class="col like-box">
                    <?= $form->field($model, 'content_ru')->editor([
                        'settings' => [
                            'lang' => 'ru',
                            'minHeight' => 200,
                            'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
                            'formatting' => ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
                            'plugins' => [
                                'fullscreen',
                            ],
                        ]
                    ]) ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
                    <?= $form->field($model, 'content_en')->editor([
                        'settings' => [
                            'lang' => 'ru',
                            'minHeight' => 200,
                            'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
                            'formatting' => ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
                            'plugins' => [
                                'fullscreen',
                            ],
                        ]
                    ]) ?>
                </div>
            </div>

            <hr>

            <div class="row justify-content-between">
                <div class="col like-box">
                    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'description_ru')->textarea(['rows' => 4]) ?>
                </div>
                <div class="col like-box">
                    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'description_en')->textarea(['rows' => 4]) ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col">
                    <div class="form-group">
                        <br>
                        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php ActiveForm::end(); ?>