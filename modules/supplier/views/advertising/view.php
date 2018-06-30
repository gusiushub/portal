<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Advertising */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Advertisings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertising-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'vessel_type',
            'option_vessel',
            'length_from',
            'length_to',
            'draft_from',
            'draft_to',
            'deadweight_from',
            'deadweight_to',
            'year_from',
            'year_to',
            'price_from',
            'price_to',
            'currency',
            'faculty',
            'flag',
            'position',
            'lvl_eng',
            'salary',
            'port',
            'country',
            'description:ntext',
            'content:ntext',
            'date',
            'image',
            'viewed',
            'user_id',
            'status',
            'category_id',
        ],
    ]) ?>

</div>
