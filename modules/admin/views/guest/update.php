<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DropList */

$this->title = 'Update Drop List: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Drop Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="drop-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
