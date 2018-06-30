<?php

namespace app\modules\supplier\controllers;

use app\models\User;
use yii\web\Controller;

/**
 * Default controller for the `supplier` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if ($_SESSION['__id']!=null) {
            $user = new User();
            return $this->render('index');
        }
    }

    public function actionHype()
    {
        return $this->render('Hype');
    }
}
