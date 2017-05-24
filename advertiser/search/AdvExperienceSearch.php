<?php

namespace advertiser\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AdvExperience;

/**
 * AdvExperienceSearch represents the model behind the search form about `common\models\AdvExperience`.
 */
class AdvExperienceSearch extends AdvExperience
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'adv_id', 'start_time', 'end_time', 'create_time', 'update_time'], 'integer'],
            [['title', 'company', 'address', 'content'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = AdvExperience::find();

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
            'adv_id' => $this->adv_id,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
