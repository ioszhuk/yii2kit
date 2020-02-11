<?php

use yii\helpers\Html;
use yii\web\View;
use noIT\core\widgets\ActiveForm;
use backend\widgets\MetronicBoostrapSelect;

/* @var $this yii\web\View */
/* @var $model \noIT\feedback\models\Feedback */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'action' => $model->isNewRecord ? ['create'] : ['update', 'id' => $model->id],
]); ?>

<?php if($model->created_at) : ?>
    <div class="row justify-content-between">
        <div class="col like-box">
            <?= $form->field($model, 'created_at')->textInput([
                'disabled' => 'disabled',
                'value' => date('d.m.Y - H:i', $model->created_at),
            ]) ?>
        </div>
    </div>
<?php endif ?>

<div class="row justify-content-between">
    <div class="col like-box">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col like-box">
        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col like-box">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col like-box">
        <?= $form->field($model, 'message')->textarea(['rows' => 12]) ?>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col like-box">
        <?= $form->field($model, 'data')->textarea(['rows' => 12]) ?>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col like-box">
        <?= $form->field($model, 'ip')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col like-box">
        <?= $form->field($model, 'status')->widget(MetronicBoostrapSelect::className(), [
            'items' => Yii::$app->params['lead-status']
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

<?php ActiveForm::end(); ?>
