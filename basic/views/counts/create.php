<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Counts $model */

$this->title = 'Create Counts';
$this->params['breadcrumbs'][] = ['label' => 'Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="counts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
