<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Planname $model */

$this->title = 'Update Planname: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Plannames', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="planname-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
