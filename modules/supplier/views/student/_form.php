<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>



    <?php $form = ActiveForm::begin(); ?>
<div class="col-lg-6">
    <?= $form->field($model, 'faculty')->textInput(['maxlength' => true, 'class' => 'textinput-container__input textinput-container__input--sing textinput-container__input--sing-3']) ?>

    <?= $form->field($model, 'lvl_eng')->textInput(['maxlength' => true, 'class' => 'textinput-container__input textinput-container__input--sing textinput-container__input--sing-3']) ?>
</div>
<div class="col-lg-6">
    <?= $form->field($model, 'port')->textInput(['maxlength' => true, 'class' => 'textinput-container__input textinput-container__input--sing textinput-container__input--sing-3']) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true, 'class' => 'textinput-container__input textinput-container__input--sing textinput-container__input--sing-3']) ?>
</div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


