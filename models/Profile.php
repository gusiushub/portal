<?php


namespace app\models;


use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

class Profile extends User
{
    public $photo;
    public $company;
    public $phone;
    public $country;
    public $city;

    public function rules()
    {
        return [
            [['photo'],'file'],
        ];
    }

    public function uploadFile()
    {
        $user = new User();
        $user->photo = $this->photo;
        $user->photo = UploadedFile::getInstance($user, 'photo');
        $user->photo->save('uploads/'.$user->photo->baseName.$user->photo->extension);
    }
}