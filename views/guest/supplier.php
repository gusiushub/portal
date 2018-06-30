<?php

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

?>

<section class="sign-up vertical-center">
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

                    <div class="row margin-bottom-medium">
                        <div class="col-lg-6">
                            <?= $form->field($model, 'company')->textInput([
                                    'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-3',
                                    'placeholder'=>'COMPANY NAME'
                            ])
                            ?>
                            <?= $form->field($model, 'country')->textInput([
                                    'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-1',
                                'placeholder'=>''
                                ])
                            ?>
                            <?= $form->field($model, 'website')->textInput([
                                    'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-4',
                                'placeholder'=>'WEBSITE ADRESS'
                                ])
                            ?>
                            <?= $form->field($model, 'option')->textInput([
                                    'class'=>'select-style__select select-style__select--sing select-style__select--sing-2',
                                'placeholder'=>''
                                ])
                            ?>
                        </div>

                        <div class="col-lg-6">
                            <?= $form->field($model, 'phone')->textInput([
                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-5',
                                'placeholder'=>'PHONE NUMBER'
                            ])
                            ?>
                            <?= $form->field($model, 'city')->textInput([
                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-3',
                                'placeholder'=>''
                            ])
                            ?>
                            <?= $form->field($model, 'email')->textInput([
                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-1',
                                'placeholder'=>'EMAIL'
                            ])
                            ?>
                            <?= $form->field($model, 'password')->textInput([
                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-2',
                                'placeholder'=>'PASSWORD'
                            ])
                            ?>

                    </div>
                    </div>

                    <div class="row horizontal-center">
                        <div class="col-lg-6">
                            <?= Html::submitButton('Sign up', ['class' => 'button margin-bottom-medium', 'name' => 'supplier_button']) ?>
                        </div>
                    </div>

                <?php
                ActiveForm::end();
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
