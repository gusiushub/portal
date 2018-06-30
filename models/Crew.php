<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "crew".
 *
 * @property int $id
 * @property string $position
 * @property string $lvl_eng
 * @property string $salary
 * @property string $curency
 */
class Crew extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'crew';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['curency'], 'required'],
            [['curency'], 'string'],
            [['position', 'lvl_eng', 'salary'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position' => 'Position',
            'lvl_eng' => 'Lvl Eng',
            'salary' => 'Salary',
            'curency' => 'Curency',
        ];
    }
}
