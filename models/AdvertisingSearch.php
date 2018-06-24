<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Advertising;

/**
 * AdvertisingSearch represents the model behind the search form of `app\models\Advertising`.
 */
class AdvertisingSearch extends Advertising
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'length_from', 'length_to', 'draft_from', 'draft_to', 'deadweight_from', 'deadweight_to', 'price_from', 'price_to', 'viewed', 'user_id', 'status', 'category_id'], 'integer'],
            [['title', 'vessel_type', 'option_vessel', 'year_from', 'year_to', 'currency', 'faculty', 'flag', 'position', 'lvl_eng', 'salary', 'port', 'country', 'description', 'content', 'date', 'image'], 'safe'],
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
        $query = Advertising::find();

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
            'length_from' => $this->length_from,
            'length_to' => $this->length_to,
            'draft_from' => $this->draft_from,
            'draft_to' => $this->draft_to,
            'deadweight_from' => $this->deadweight_from,
            'deadweight_to' => $this->deadweight_to,
            'year_from' => $this->year_from,
            'year_to' => $this->year_to,
            'price_from' => $this->price_from,
            'price_to' => $this->price_to,
            'date' => $this->date,
            'viewed' => $this->viewed,
            'user_id' => $this->user_id,
            'status' => $this->status,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'vessel_type', $this->vessel_type])
            ->andFilterWhere(['like', 'option_vessel', $this->option_vessel])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'faculty', $this->faculty])
            ->andFilterWhere(['like', 'flag', $this->flag])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'lvl_eng', $this->lvl_eng])
            ->andFilterWhere(['like', 'salary', $this->salary])
            ->andFilterWhere(['like', 'port', $this->port])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
