<?php
/**
 * Created by PhpStorm.
 * User: zolow
 * Date: 25.06.2018
 * Time: 20:01
 */

namespace app\models;

use app\models\User;


class Signup extends User
{
    public $email;
    public $password;
    public $f_name;
    public $s_name;
    public $city;
    public $phone;

    public function rules()
    {
        return [
            [['email','password','f_name','s_name'], 'required'],
            ['email','email'],
//            //Проверка уникальности username
//            ['username','unique','targetClass'=>'app\models\User'],
            //Проверка уникальности email
            ['email','unique','targetClass'=>'app\models\User'],
            ['password','string','min'=>2,'max'=>10]
        ];
    }
    public function signup()
    {
        $user = new User();
        $user->email = $this->email;
        $user->f_name = $this->f_name;
        $user->s_name = $this->s_name;
        $user->password = sha1($this->password);
        return $user->save();
    }
}