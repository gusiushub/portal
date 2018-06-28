<?php

use yii\bootstrap\Html;
use yii\widgets\ActiveForm;
?>

<section class="sign-in vertical-center">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <?php

                    $forma = ActiveForm::begin([
                        'class' => 'login-to',
                        'options' => ['class' => 'form-horizontal'],
                        'fieldConfig' => [
                            'template' => '<h4 class="filter__title">{label}</h4><div class="textinput-container">{input}</div>{error}',
//        'labelOptions' => ['class' => 'secondary-headline__title secondary-headline__title--sign'],
                            'inputOptions' => ['class' => '']
                        ],
                    ]);

                    ?>
                    <div class="login-to">
                        <div class="secondary-headline margin-bottom-light">
                            <h2 class="secondary-headline__title secondary-headline__title--sign">
                                Login to account
                            </h2>
                        </div>
                            <?= $forma->field($model, 'email')->textInput([
                                    'class' => 'textinput-container__input textinput-container__input--sing textinput-container__input--sing-1',
                                    'placeholder'=>'YOUR E-MAIL',
                                ]) ?>
                            <?= $forma->field($model, 'password')->passwordInput([
                                    'class' => 'textinput-container__input textinput-container__input--sing textinput-container__input--sing-2',
                                    'placeholder'=>'PASSWORD',
                                ]) ?>
                        <?= Html::submitButton('Sing in', ['class' => 'button button--sign margin-bottom-medium']) ?>
                        <p class="login-to__operations">Forgot password? <a href="#" class="login-to__link">Reset it</a></p>
                        <p class="login-to__operations">Don't have an account yet? <a href="#" class="login-to__link">Sign up</a></p>
                    </div>
                    <?php
                    ActiveForm::end();
                    ?>
                </div>
            </div>
        </div>
    </section>
