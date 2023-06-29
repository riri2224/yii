<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Contactus $model */

$this->title = 'Create Contactus';
$this->params['breadcrumbs'][] = ['label' => 'Contactuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
