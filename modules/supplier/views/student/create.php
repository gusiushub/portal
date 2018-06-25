<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = 'Create Student';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-lg-12">
<div class="login-up">
<div class="secondary-headline margin-bottom-light">
    <h2 class="secondary-headline__title secondary-headline__title--sign"><?= Html::encode($this->title) ?></h2>
</div>
    <div class="row margin-bottom-medium">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
</div>
</div>
