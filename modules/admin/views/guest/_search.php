<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DropListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drop-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'f_name') ?>

    <?= $form->field($model, 's_name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'company') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'option') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
