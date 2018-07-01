<?php

namespace app\modules\supplier\controllers;

use app\models\ImageUpload;
use app\models\Profile;
use app\models\User;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

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
        //if ($_SESSION['__id']!=null) {
            //$model = new User();
        $model = new Profile();
        //var_dump($model);
//            if(isset($_POST['save']))
//            {
        if (Yii::$app->request->isPost && $model->validate())
                {
                    $up = new ImageUpload;
                    //$model->uploadFile();
                    $file = UploadedFile::getInstance($up, 'photo');
                    $up->uploadFile($file, $model->photo->baseName.$model->photo->extension);
                    //var_dump(Yii::$app->request->post());exit;
//                    $model->photo = UploadedFile::getInstance($model, 'photo');
//                    $model->photo->saveAs('uploads/'.$model->photo->baseName.$model->photo->extension);
                    //var_dump('asdasd');exit;
//                    $imageName = time();
//                    $model->file = UploadedFile::getInstance($model, 'photo');
//                    if(!empty($model->file))
//                    {
//                        $model->file->saveAs('blog_'.$imageName.'.'.$model->file->extension);
//                        $model->photo = 'blog_'.$imageName.'.'.$model->file->extension;
//                        $model->save();
//                    }
            //return $this->redirect(['/supplier']);
                }
     //       }
            return $this->render('index',['model'=>$model]);
        //}
    }

    public function actionHype()
    {
        return $this->render('Hype');
    }


}
