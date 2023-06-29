<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Team $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="team-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'img')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phrase_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phrase_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
