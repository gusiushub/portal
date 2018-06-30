<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DropList */

$this->title = 'Create Drop List';
$this->params['breadcrumbs'][] = ['label' => 'Drop Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drop-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
