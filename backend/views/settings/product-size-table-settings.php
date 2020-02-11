<?php

use unclead\multipleinput\MultipleInput;
use yii\helpers\Html;
use noIT\core\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\settings\ProductSizeTableSettings */

$this->title = 'Таблица размеров';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['settings/product-size-table-settings']];

?>

<?php $form = ActiveForm::begin(); ?>

    <div class="custom-form-section">

        <div class="custom-form-section-box">

            <div class="row justify-content-between">
                <div class="col like-box">
                    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col like-box">
                    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
                    <?= $form->field($model, 'table_list_ru')->widget(MultipleInput::className(), [
                        'allowEmptyList'    => true,
                        'enableGuessTitle'  => false,
                        'sortable' => false,
                        'addButtonPosition' => MultipleInput::POS_HEADER,
                        'columns' => [
                            [
                                'name'  => 'column_1',
                                'title' => 'Столбец 1',
                            ],
                            [
                                'name'  => 'column_2',
                                'title' => 'Столбец 2',
                            ],
                            [
                                'name'  => 'column_3',
                                'title' => 'Столбец 3',
                            ],
                            [
                                'name'  => 'column_4',
                                'title' => 'Столбец 4',
                            ],

                        ]
                    ]) ?>
                </div>
            </div>

            <hr>

            <div class="row justify-content-between">
                <div class="col like-box">
                    <?= $form->field($model, 'table_list_en')->widget(MultipleInput::className(), [
                        'allowEmptyList'    => true,
                        'enableGuessTitle'  => false,
                        'sortable' => false,
                        'addButtonPosition' => MultipleInput::POS_HEADER,
                        'columns' => [
                            [
                                'name'  => 'column_1',
                                'title' => 'Столбец 1',
                            ],
                            [
                                'name'  => 'column_2',
                                'title' => 'Столбец 2',
                            ],
                            [
                                'name'  => 'column_3',
                                'title' => 'Столбец 3',
                            ],
                            [
                                'name'  => 'column_4',
                                'title' => 'Столбец 4',
                            ],
                        ]
                    ]) ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
                    <?= $form->field($model, 'body_ru')->editor([
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
                    <?= $form->field($model, 'body_en')->editor([
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