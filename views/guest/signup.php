<?php

use yii\bootstrap\Html;
use \yii\widgets\ActiveForm;

?>
<section class="sign-up-2">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <div class="login-up">
                    <div class="secondary-headline margin-bottom-light">
                        <h2 class="secondary-headline__title secondary-headline__title--sign">
                            Create an account
                        </h2>
                    </div>
<?php
$form = ActiveForm::begin([
    'class' => 'login-up',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
        'template' => '<h4 class="filter__title">{label}</h4><div class="textinput-container">{input}</div>{error}',
//        'labelOptions' => ['class' => 'secondary-headline__title secondary-headline__title--sign'],
        'inputOptions' => ['class' => '']
    ],
]);
?>

        <div class="row margin-bottom-light">
            <div class="col-lg-6">
<?= $form->field($model, 'email')->textInput(['class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-1']) ?>
<?= $form->field($model, 'f_name')->textInput(['class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-2']) ?>
<?= $form->field($model, 's_name')->textInput(['class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-3'])?>
            </div>


            <div class="col-lg-6">
<?= $form->field($model, 'city')->textInput(['class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-4']) ?>
<?= $form->field($model, 'phone')->textInput(['class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-5']) ?>
<?= $form->field($model, 'password')->textInput(['class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-6'])?>
        </div>
        </div>
        <div class="row horizontal-center margin-bottom-medium">
            <div class="col-lg-6">
                <h4 class="filter__title">
                    Password
                </h4>
                <div class="textinput-container">
                    <input type="password" class="textinput-container__input textinput-container__input--sing textinput-container__input--sing-2 textinput-container__input--pass" placeholder="PASSWORD" name="password">
                    <button class="password-eye">
                        &nbsp;
                    </button>
                </div>
            </div>
        </div>
        <div class="button margin-bottom-medium">
            <div class="col-lg-6">


                <?= Html::submitButton('Login', ['class' => 'password-eye', 'name' => 'login-button']) ?>
    </div>
    </div>
<?php
ActiveForm::end();
?>
    </div>
            </div>
            </div>
            </div>
            </div>
            </div>
</section>
