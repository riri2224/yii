<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Feature $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="feature-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'img')->FileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subdescrip_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'subdescrip_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descrip_ru')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'descrip_kk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
