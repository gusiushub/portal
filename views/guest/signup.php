<?php
use \yii\widgets\ActiveForm;
?>
<section class="sign-up-2">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12">
    <div class="login-up">
<?php
$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
        'template' => '<div class="secondary-headline margin-bottom-light"><h2 class="secondary-headline__title secondary-headline__title--sign">{label}</h2></div><div class="textinput-container">{input}</div><div class="col-sm-10">{error}</div>',
        'labelOptions' => ['class' => 'secondary-headline__title secondary-headline__title--sign'],
    ],
]);
?>
    <h1>Регистрация</h1>
<?= $form->field($model, 'email')->textInput(['autofocus'=>true]) ?>
<?= $form->field($model, 'f_name') ?>
<?= $form->field($model, 's_name')->textInput() ?>
<?= $form->field($model, 'city')->textInput() ?>
<?= $form->field($model, 'phone')->textInput() ?>
<?= $form->field($model, 'password')->passwordInput() ?>
    <div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </div>
<?php
ActiveForm::end();
?>
    </div>
            </div>
            </div>
            </div>
</section>
