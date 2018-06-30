<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $f_name
 * @property string $s_name
 * @property string $faculty
 * @property string $lvl_eng
 * @property string $port
 * @property string $country
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['f_name', 's_name', 'faculty', 'lvl_eng', 'port', 'country'], 'string', 'max' => 255],
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
            'faculty' => 'Faculty',
            'lvl_eng' => 'Lvl Eng',
            'port' => 'Port',
            'country' => 'Country',
        ];
    }
}
