<?php

namespace app\models;


class Signup extends User
{
    public $email;
    public $password;
    public $f_name;
    public $s_name;
    public $city;
    public $phone;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['email','password','f_name','s_name','city','phone'], 'required'],
            ['email','email'],
//            //Проверка уникальности username
//            ['username','unique','targetClass'=>'app\models\User'],
            //Проверка уникальности email
            ['email','unique','targetClass'=>'app\models\User'],
            ['password','string','min'=>2,'max'=>10]
        ];
    }

    /**
     * @return bool
     */
    public function signup()
    {
        $user = new User();
        $user->email = $this->email;
        $user->f_name = $this->f_name;
        $user->s_name = $this->s_name;
        $user->city = $this->city;
        $user->phone = $this->phone;
        $user->password = sha1($this->password);
        return $user->save();
    }
}