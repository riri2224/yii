<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Faq $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="faq-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'question_ru')->textInput(['rows' => 6]) ?>
    <?= $form->field($model, 'question_kk')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'answer_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'answer_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
