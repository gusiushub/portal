<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $f_name
 * @property string $s_name
 * @property string $email
 * @property string $city
 * @property string $phone
 * @property string $country
 * @property string $website
 * @property string $company
 * @property string $username
 * @property string $password
 * @property string $option
 * @property string $photo
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['f_name', 's_name', 'email', 'city', 'phone', 'country', 'website', 'company'], 'string', 'max' => 100],
            [['username'], 'string', 'max' => 50],
            [['password', 'option', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'f_name' => 'F Name',
            's_name' => 'S Name',
            'email' => 'Email',
            'city' => 'City',
            'phone' => 'Phone',
            'country' => 'Country',
            'website' => 'Website',
            'company' => 'Company',
            'username' => 'Username',
            'password' => 'Password',
            'option' => 'Option',
            'photo' => 'Photo',
        ];
    }
}
