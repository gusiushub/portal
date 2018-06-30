<?php

namespace app\models;


class BecomeSupplier extends User
{
    public $email;
    public $password;
    public $company;
    public $country;
    public $website;
    public $option;
    public $city;
    public $phone;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['email','password','website','option','city','phone','company','country'], 'required'],
            ['email','email'],
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
        $user->website = $this->website;
        $user->option = $this->option;
        $user->company = $this->company;
        $user->country = $this->country;
        $user->city = $this->city;
        $user->phone = $this->phone;
        $user->password = sha1($this->password);
        return $user->save();
    }
}