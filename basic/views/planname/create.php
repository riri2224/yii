<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Planname $model */

$this->title = 'Create Planname';
$this->params['breadcrumbs'][] = ['label' => 'Plannames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planname-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
