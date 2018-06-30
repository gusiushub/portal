<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Advertising */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advertising-form">

    <?php $form = ActiveForm::begin([
        'layout'=>'horizontal',
        'options' => ['class' => 'signup-form form-register1'],
//        'fieldConfig' => [
//            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
//            'horizontalCssClasses' => [
//                'label' => 'col-sm-4',
//                'offset' => 'col-sm-offset-4',
//                'wrapper' => 'col-sm-8',
//                'error' => '',
//                'hint' => '',
//            ],
//        ],
    ]); ?>

<!--    --><?//= $form->field($model, 'title', [
//        'textInput' => ['placeholder' => 'Email'],
//        'inputTemplate' => '<div ><textInput></textInput></div>'
//    ]); ?>
<!--    --><?php //[
//        'id' => 'contact-form',
//        'fieldConfig' => [
//            'options' => [
//                'tag' => false,
//            ],
//        ]];
//    ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vessel_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'option_vessel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'length_from')->textInput() ?>

    <?= $form->field($model, 'length_to')->textInput() ?>

    <?= $form->field($model, 'draft_from')->textInput() ?>

    <?= $form->field($model, 'draft_to')->textInput() ?>

    <?= $form->field($model, 'deadweight_from')->textInput() ?>

    <?= $form->field($model, 'deadweight_to')->textInput() ?>

    <?= $form->field($model, 'year_from')->textInput() ?>

    <?= $form->field($model, 'year_to')->textInput() ?>

    <?= $form->field($model, 'price_from')->textInput() ?>

    <?= $form->field($model, 'price_to')->textInput() ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'faculty')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'flag')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'lvl_eng')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'salary')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'port')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?//= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?//= $form->field($model, 'date')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'viewed')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'user_id')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'status')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
