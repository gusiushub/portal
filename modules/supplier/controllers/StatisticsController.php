<?php

namespace app\modules\supplier\controllers;


use yii\web\Controller;

class StatisticsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}