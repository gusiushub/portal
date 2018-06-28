<?php

namespace app\controllers;

use app\components\AccessRule;
use app\models\Login;
use app\models\User;
use app\models\Signup;
use Yii;
use app\models\LoginForm;
use yii\filters\AccessControl;
use yii\web\Controller;

class GuestController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                    ],
                'only' => ['crew'],
                'rules' => [
                    [
                        'actions' => ['crew'],
                        'allow' => true,
                        'roles' => [User::ROLE_ADMIN],
                    ],
                ],
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest){
            return $this->goHome();
        }
        $model = new Login();
        if (Yii::$app->request->post('Login')){
            $model->attributes = Yii::$app->request->post('Login');
            if ($model->validate()){
                Yii::$app->user->login($model->getUser());
                return $this->goHome();
            }
        }
        return $this->render('login',['model'=>$model]);
    }

    /**
     * Logout action.
     *
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * @return string
     */
    public function actionSignup()
    {
        $model = new Signup();
        if(isset($_POST['Signup']))
        {
            $model->attributes = Yii::$app->request->post('Signup');
            if($model->validate() && $model->signup())
            {
                return $this->goHome();
            }
        }
        return $this->render('signup',['model'=>$model]);
    }

    public function actionSupplier()
    {
        return $this->render('supplier');
    }

}