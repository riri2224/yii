<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Aboutus $model */

$this->title = 'Create Aboutus';
$this->params['breadcrumbs'][] = ['label' => 'Aboutuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
