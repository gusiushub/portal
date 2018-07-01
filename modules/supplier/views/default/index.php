<?php
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

?>
<section class="profile1">
    <div class="container">
        <?php
        $form = ActiveForm::begin([
            'class' => '',
            'options' => ['enctype' => 'multipart/form-data'],
            'fieldConfig' => [
                'template' => '<div class="profile__setting"><div class="row"><div class="col-lg-4 col-md-4 col-sm-4 col-4 vertical-center"><span class="profile__details" >{label}</span></div><div class="col-lg-8 col-md-8 col-sm-8 col-8"><div class="textinput-container">{input}</div></div></div></div>{error}',
                //'labelOptions' => ['class' => ''],
                //'inputOptions' => ['class' => '']
            ],
        ]);
        ?>
        <div class="row">
            <div class="col-lg-3">
                <div class="profile">
                    <?php if(!empty($model->photo)){
                        echo Html::img($model->photo, $options = ['class' => 'profile__photo margin-bottom-light']);//, 'style' => ['width' => '180px']
                    } ?>
                    <img src="img/company-logo-big.jpg" alt="company-logo" class="profile__photo margin-bottom-light">
<!--
<button class="profile__upload-photo margin-bottom-medium">-->
<!--                        select file-->
<!--                    </button>-->
                    <?= $form->field($model, 'photo')->fileInput([
                        'class'=>'profile__upload-photo margin-bottom-medium',
                        'name'=>'photo'
                    ]) ?>
                </div>
            </div>

            <div class="col-lg-9">

                <div class="row block-underline">

                    <div class="col-lg-6">
                        <?= $form->field($model, 'company')->textInput([
                            'class'=>'textinput-container__input',
                            'placeholder'=>'COMPANY',
                            'name'=>'company'
                        ]) ?>
                        <?= $form->field($model, 'phone')->textInput([
                            'class'=>'textinput-container__input',
                            'placeholder'=>'PHONE',
                            'name'=>'company'
                        ]) ?>
                        <?= $form->field($model, 'country')->textInput([
                            'class'=>'textinput-container__input',
                            'placeholder'=>'COUNTRY',
                            'name'=>'company'
                        ]) ?>
                        <?= $form->field($model, 'city')->textInput([
                            'class'=>'textinput-container__input',
                            'placeholder'=>'CITY',
                            'name'=>'company'
                        ]) ?>
<!--                        --><?//= $form->field($model, 'website')->textInput([
//                            'class'=>'textinput-container__input',
//                            'placeholder'=>'WEBSITE',
//                            'name'=>'company'
//                        ]) ?>
<!--                        --><?//= $form->field($model, 'email')->textInput([
//                            'class'=>'textinput-container__input',
//                            'placeholder'=>'E-MAIL',
//                            'name'=>'company'
//                        ]) ?>
<!--                        --><?//= $form->field($model, 'email')->textInput([
//                            'class'=>'textinput-container__input',
//                            'placeholder'=>'COMPANY',
//                            'name'=>'company'
//                        ]) ?>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-5 offset-lg-6">
                                <?= Html::submitButton('Save', ['class' => 'button button--profile', 'name' => 'save']) ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                        <div class="profile__setting">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <span class="profile__details">
                                                    Password:
                                                </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <p class="profile__password">
                                        7ngdc5cn
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="row">
                            <div class="col-lg-5 offset-lg-6">
                                <button class="button button--profile">
                                    change
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <?php
        ActiveForm::end();
        ?>
    </div>
</section>