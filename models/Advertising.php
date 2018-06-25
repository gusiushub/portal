<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "advertising".
 *
 * @property int $id
 * @property string $title
 * @property string $vessel_type
 * @property string $option_vessel
 * @property int $length_from
 * @property int $length_to
 * @property int $draft_from
 * @property int $draft_to
 * @property int $deadweight_from
 * @property int $deadweight_to
 * @property string $year_from
 * @property string $year_to
 * @property int $price_from
 * @property int $price_to
 * @property string $currency
 * @property string $faculty
 * @property string $flag
 * @property string $position
 * @property string $lvl_eng
 * @property string $salary
 * @property string $port
 * @property string $country
 * @property string $description
 * @property string $content
 * @property string $date
 * @property string $image
 * @property int $viewed
 * @property int $user_id
 * @property int $status
 * @property int $category_id
 */
class Advertising extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advertising';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['length_from', 'length_to', 'draft_from', 'draft_to', 'deadweight_from', 'deadweight_to', 'price_from', 'price_to', 'viewed', 'user_id', 'status', 'category_id'], 'integer'],
            [['year_from', 'year_to', 'date'], 'safe'],
            [['description', 'content'], 'string'],
            [['date'], 'date','format'=>'php:Y-m-d'],
            [['date'], 'default','value'=>date('Y-m-d')],
            [['title', 'vessel_type', 'option_vessel', 'currency', 'faculty', 'flag', 'position', 'lvl_eng', 'salary', 'port', 'country', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'vessel_type' => 'Vessel Type',
            'option_vessel' => 'Option Vessel',
            'length_from' => 'Length From',
            'length_to' => 'Length To',
            'draft_from' => 'Draft From',
            'draft_to' => 'Draft To',
            'deadweight_from' => 'Deadweight From',
            'deadweight_to' => 'Deadweight To',
            'year_from' => 'Year From',
            'year_to' => 'Year To',
            'price_from' => 'Price From',
            'price_to' => 'Price To',
            'currency' => 'Currency',
            'faculty' => 'Faculty',
            'flag' => 'Flag',
            'position' => 'Position',
            'lvl_eng' => 'Lvl Eng',
            'salary' => 'Salary',
            'port' => 'Port',
            'country' => 'Country',
            'description' => 'Description',
            'content' => 'Content',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'user_id' => 'User ID',
            'status' => 'Status',
            'category_id' => 'Category ID',
        ];
    }
}
