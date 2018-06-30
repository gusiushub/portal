<?php

namespace app\controllers;


use app\models\Student;
use app\models\StudentSearch;
use yii\web\Controller;

class FindController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function actionStudent()
    {
        $model = new StudentSearch();
        return $this->render('student',['model'=>$model]);
    }

    /**
     * @return string
     */
    public function actionCrew()
    {
        $model = new StudentSearch();
        return $this->render('crew',['model'=>$model]);
    }

    /**
     * @return string
     */
    public function actionVessels()
    {
        return $this->render('vessels');
    }

    /**
     * @return string
     */
    public function actionSupplier()
    {
        return $this->render('supplier');
    }
}