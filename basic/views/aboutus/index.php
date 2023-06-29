<?php

use app\models\Aboutus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Aboutuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutus-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aboutus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_ru',
            // 'title_kk',
            'descrip_ru:ntext',
            // 'descrip_kk:ntext',
            [
                'attribute' => 'img',
                'value' => function ($data) { 
                    return '/uploads/aboutus/'.$data->img;
                },
                'format' => ['image', ['height' => 100]]
            ],
            //'link',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Aboutus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
