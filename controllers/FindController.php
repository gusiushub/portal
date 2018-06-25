<?php

namespace app\controllers;


use app\models\Student;
use app\models\StudentSearch;
use yii\web\Controller;

class FindController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionStudent()
    {
        $model = new StudentSearch();
        return $this->render('student',['model'=>$model]);
    }

    public function actionCrew()
    {
        $model = new StudentSearch();
        return $this->render('crew',['model'=>$model]);
    }

    public function actionVessels()
    {
        return $this->render('vessels');
    }

    public function actionSupplier()
    {
        return $this->render('supplier');
    }
}