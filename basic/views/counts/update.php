<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Counts $model */

$this->title = 'Update Counts: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="counts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
