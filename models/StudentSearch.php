<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form of `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['f_name', 's_name', 'faculty', 'lvl_eng', 'port', 'country'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Student::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'f_name', $this->f_name])
            ->andFilterWhere(['like', 's_name', $this->s_name])
            ->andFilterWhere(['like', 'faculty', $this->faculty])
            ->andFilterWhere(['like', 'lvl_eng', $this->lvl_eng])
            ->andFilterWhere(['like', 'port', $this->port])
            ->andFilterWhere(['like', 'country', $this->country]);

        return $dataProvider;
    }

    public function getAll($field)
    {
        return Student::find()->select([$field])->distinct()->all();
    }
}
