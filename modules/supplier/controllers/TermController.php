<?php
/**
 * Created by PhpStorm.
 * User: zolow
 * Date: 01.07.2018
 * Time: 19:00
 */

namespace app\modules\supplier\controllers;


use yii\web\Controller;

class TermController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}