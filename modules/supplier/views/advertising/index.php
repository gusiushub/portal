<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdvertisingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Advertisings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertising-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Advertising', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'vessel_type',
            'option_vessel',
            'length_from',
            //'length_to',
            //'draft_from',
            //'draft_to',
            //'deadweight_from',
            //'deadweight_to',
            //'year_from',
            //'year_to',
            //'price_from',
            //'price_to',
            //'currency',
            //'faculty',
            //'flag',
            //'position',
            //'lvl_eng',
            //'salary',
            //'port',
            //'country',
            //'description:ntext',
            //'content:ntext',
            //'date',
            //'image',
            //'viewed',
            //'user_id',
            //'status',
            //'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
