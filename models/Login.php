<?php

namespace app\models;

use yii\base\Model;

class Login extends Model
{
    public $email;
    public $password;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['email','password'], 'required'],
            ['email','email'],
            ['password','validatePassword']//собственная функция для валидации пароля
        ];
    }

    /**
     * @param $attribute
     * @param $params
     */
//    public function validatePassword($attribute, $params)
//    {
//        //если нет ошибок в валидации
//        if(!$this->hasErrors()){
//            //получаем пользователя для дальнейшего сравнения пароля
//            $user = $this->getUser();
//            if (!$user || !$user->validatePassword($this->password)){
//                //если мы не нашли в базе такого пользователя
//                //или введенный пароль пользователя не совпадает с паролем в базе то
//                $this->addError($attribute,'Пароль или email не верны');
//                //добавляем новую ошибку для атрибута password о том что пароль или email введены не верно
//            }
//        }
//    }
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * @return null|static
     */

    public function getUser()
    {
        //пользователя мы получаем по ввведенному email
        return User::findOne(['email'=>$this->email]);
    }
}