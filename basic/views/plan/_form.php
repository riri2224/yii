<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Plan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="plan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'one_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'one_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'four_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'four_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'five_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'five_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
