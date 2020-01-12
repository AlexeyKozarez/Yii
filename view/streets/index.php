<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchStreets */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Streets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="streets-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Streets', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'id_city',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
