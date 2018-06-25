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
}