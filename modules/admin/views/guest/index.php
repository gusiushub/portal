<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DropListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Drop Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drop-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Drop List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'f_name',
            's_name',
            'email:email',
            'city',
            //'phone',
            //'country',
            //'website',
            //'company',
            //'username',
            //'password',
            //'option',
            //'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
