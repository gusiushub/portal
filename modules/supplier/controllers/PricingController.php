<?php

namespace app\modules\supplier\controllers;


use yii\web\Controller;

class PricingController extends Controller
{
    public function actionIndex()
    {
        //echo 'sasd';
        return $this->render('index');
    }
}