<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

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
class User extends ActiveRecord implements IdentityInterface
{

    const ROLE_ADMIN = 'root';
    const ROLE_USER = 'user';
    const ROLE_ATTORNEY = 'attorney';

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
//            [['username'], 'string', 'max' => 50],
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

    /**
     * @param int|string $id
     * @return IdentityInterface
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @param mixed $token
     * @param null $type
     * @return IdentityInterface
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @param string $authKey
     * @return bool
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * @param $role
     * @return bool
     */
    public function can($role) {
        return $this->role == $role;
    }

    /**
     * @param $password
     * @return bool
     */
    public function validatePassword($password)
    {
        return $this->password === sha1($password);
    }

}
