<?php

namespace publisher\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Advertiser;

/**
 * AdvertiserSearch represents the model behind the search form about `common\models\Advertiser`.
 */
class AdvertiserSearch extends Advertiser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'payment_term', 'pm', 'bd', 'status', 'type', 'create_time', 'update_time', 'qq', 'firstaccess', 'lastaccess', 'picture', 'confirmed', 'suspended', 'deleted', 'profile_complete', 'approved'], 'integer'],
            [['username', 'firstname', 'lastname', 'system', 'contacts', 'pricing_mode', 'auth_token', 'auth_key', 'password_hash', 'password_reset_token', 'post_parameter', 'email', 'cc_email', 'company', 'country', 'city', 'address', 'phone1', 'phone2', 'weixin', 'skype', 'alipay', 'lang', 'timezone', 'ip_whitelist', 'note', 'name_card_path'], 'safe'],
            [['total_revenue', 'receivable', 'received'], 'number'],
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
        $query = Advertiser::find();

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
            'payment_term' => $this->payment_term,
            'pm' => $this->pm,
            'bd' => $this->bd,
            'status' => $this->status,
            'total_revenue' => $this->total_revenue,
            'receivable' => $this->receivable,
            'received' => $this->received,
            'type' => $this->type,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'qq' => $this->qq,
            'firstaccess' => $this->firstaccess,
            'lastaccess' => $this->lastaccess,
            'picture' => $this->picture,
            'confirmed' => $this->confirmed,
            'suspended' => $this->suspended,
            'deleted' => $this->deleted,
            'profile_complete' => $this->profile_complete,
            'approved' => $this->approved,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'system', $this->system])
            ->andFilterWhere(['like', 'contacts', $this->contacts])
            ->andFilterWhere(['like', 'pricing_mode', $this->pricing_mode])
            ->andFilterWhere(['like', 'auth_token', $this->auth_token])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'post_parameter', $this->post_parameter])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'cc_email', $this->cc_email])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone1', $this->phone1])
            ->andFilterWhere(['like', 'phone2', $this->phone2])
            ->andFilterWhere(['like', 'weixin', $this->weixin])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'alipay', $this->alipay])
            ->andFilterWhere(['like', 'lang', $this->lang])
            ->andFilterWhere(['like', 'timezone', $this->timezone])
            ->andFilterWhere(['like', 'ip_whitelist', $this->ip_whitelist])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'name_card_path', $this->name_card_path]);

        return $dataProvider;
    }
}
