<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdvertisingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advertising-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'vessel_type') ?>

    <?= $form->field($model, 'option_vessel') ?>

    <?= $form->field($model, 'length_from') ?>

    <?php // echo $form->field($model, 'length_to') ?>

    <?php // echo $form->field($model, 'draft_from') ?>

    <?php // echo $form->field($model, 'draft_to') ?>

    <?php // echo $form->field($model, 'deadweight_from') ?>

    <?php // echo $form->field($model, 'deadweight_to') ?>

    <?php // echo $form->field($model, 'year_from') ?>

    <?php // echo $form->field($model, 'year_to') ?>

    <?php // echo $form->field($model, 'price_from') ?>

    <?php // echo $form->field($model, 'price_to') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'faculty') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'lvl_eng') ?>

    <?php // echo $form->field($model, 'salary') ?>

    <?php // echo $form->field($model, 'port') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'viewed') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
