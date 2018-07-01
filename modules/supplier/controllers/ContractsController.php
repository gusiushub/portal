<?php

namespace app\modules\supplier\controllers;


use yii\web\Controller;

class ContractsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}