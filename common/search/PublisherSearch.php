<?php

namespace common\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Publisher;

/**
 * PublisherSearch represents the model behind the search form about `common\models\Publisher`.
 */
class PublisherSearch extends Publisher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'pm', 'om', 'master_publisher', 'payment_term', 'create_time', 'update_time', 'qq', 'firstaccess', 'lastaccess', 'picture', 'confirmed', 'suspended', 'deleted', 'status', 'total_revenue', 'payable', 'recommended', 'os', 'profile_complete'], 'integer'],
            [['username', 'firstname', 'lastname', 'auth_token', 'auth_key', 'password_hash', 'password_reset_token', 'payment_way', 'beneficiary_name', 'bank_country', 'bank_name', 'bank_address', 'swift', 'account_nu_iban', 'company_address', 'system', 'contacts', 'email', 'cc_email', 'company', 'country', 'city', 'address', 'phone1', 'phone2', 'wechat', 'skype', 'alipay', 'lang', 'timezone', 'traffic_source', 'pricing_mode', 'note', 'post_back', 'paid', 'strong_geo', 'strong_category'], 'safe'],
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
        $query = Publisher::find();

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
            'type' => $this->type,
            'pm' => $this->pm,
            'om' => $this->om,
            'master_publisher' => $this->master_publisher,
            'payment_term' => $this->payment_term,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'qq' => $this->qq,
            'firstaccess' => $this->firstaccess,
            'lastaccess' => $this->lastaccess,
            'picture' => $this->picture,
            'confirmed' => $this->confirmed,
            'suspended' => $this->suspended,
            'deleted' => $this->deleted,
            'status' => $this->status,
            'total_revenue' => $this->total_revenue,
            'payable' => $this->payable,
            'recommended' => $this->recommended,
            'os' => $this->os,
            'profile_complete' => 50,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'auth_token', $this->auth_token])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'payment_way', $this->payment_way])
            ->andFilterWhere(['like', 'beneficiary_name', $this->beneficiary_name])
            ->andFilterWhere(['like', 'bank_country', $this->bank_country])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name])
            ->andFilterWhere(['like', 'bank_address', $this->bank_address])
            ->andFilterWhere(['like', 'swift', $this->swift])
            ->andFilterWhere(['like', 'account_nu_iban', $this->account_nu_iban])
            ->andFilterWhere(['like', 'company_address', $this->company_address])
            ->andFilterWhere(['like', 'system', $this->system])
            ->andFilterWhere(['like', 'contacts', $this->contacts])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'cc_email', $this->cc_email])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone1', $this->phone1])
            ->andFilterWhere(['like', 'phone2', $this->phone2])
            ->andFilterWhere(['like', 'wechat', $this->wechat])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'alipay', $this->alipay])
            ->andFilterWhere(['like', 'lang', $this->lang])
            ->andFilterWhere(['like', 'timezone', $this->timezone])
            ->andFilterWhere(['like', 'traffic_source', $this->traffic_source])
            ->andFilterWhere(['like', 'pricing_mode', $this->pricing_mode])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'post_back', $this->post_back])
            ->andFilterWhere(['like', 'paid', $this->paid])
            ->andFilterWhere(['like', 'strong_geo', $this->strong_geo])
            ->andFilterWhere(['like', 'strong_category', $this->strong_category])
            ->andFilterWhere(['<>', 'profile_complete', 100])
            ->andFilterWhere(['<>', 'approved', 1]);

        return $dataProvider;
    }

    public function certificateSearch($params)
    {
        $query = Publisher::find();

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
            'type' => $this->type,
            'pm' => $this->pm,
            'om' => $this->om,
            'master_publisher' => $this->master_publisher,
            'payment_term' => $this->payment_term,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'qq' => $this->qq,
            'firstaccess' => $this->firstaccess,
            'lastaccess' => $this->lastaccess,
            'picture' => $this->picture,
            'confirmed' => $this->confirmed,
            'suspended' => $this->suspended,
            'deleted' => $this->deleted,
            'status' => $this->status,
            'total_revenue' => $this->total_revenue,
            'payable' => $this->payable,
            'recommended' => $this->recommended,
            'os' => $this->os,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'auth_token', $this->auth_token])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'payment_way', $this->payment_way])
            ->andFilterWhere(['like', 'beneficiary_name', $this->beneficiary_name])
            ->andFilterWhere(['like', 'bank_country', $this->bank_country])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name])
            ->andFilterWhere(['like', 'bank_address', $this->bank_address])
            ->andFilterWhere(['like', 'swift', $this->swift])
            ->andFilterWhere(['like', 'account_nu_iban', $this->account_nu_iban])
            ->andFilterWhere(['like', 'company_address', $this->company_address])
            ->andFilterWhere(['like', 'system', $this->system])
            ->andFilterWhere(['like', 'contacts', $this->contacts])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'cc_email', $this->cc_email])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone1', $this->phone1])
            ->andFilterWhere(['like', 'phone2', $this->phone2])
            ->andFilterWhere(['like', 'wechat', $this->wechat])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'alipay', $this->alipay])
            ->andFilterWhere(['like', 'lang', $this->lang])
            ->andFilterWhere(['like', 'timezone', $this->timezone])
            ->andFilterWhere(['like', 'traffic_source', $this->traffic_source])
            ->andFilterWhere(['like', 'pricing_mode', $this->pricing_mode])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'post_back', $this->post_back])
            ->andFilterWhere(['like', 'paid', $this->paid])
            ->andFilterWhere(['like', 'strong_geo', $this->strong_geo])
            ->andFilterWhere(['like', 'strong_category', $this->strong_category])
            ->andFilterWhere(['=', 'profile_complete', 100])
            ->andFilterWhere(['=', 'approved', 1]);

        return $dataProvider;
    }

    public function certifyingSearch($params)
    {
        $query = Publisher::find();

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
            'type' => $this->type,
            'pm' => $this->pm,
            'om' => $this->om,
            'master_publisher' => $this->master_publisher,
            'payment_term' => $this->payment_term,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'qq' => $this->qq,
            'firstaccess' => $this->firstaccess,
            'lastaccess' => $this->lastaccess,
            'picture' => $this->picture,
            'confirmed' => $this->confirmed,
            'suspended' => $this->suspended,
            'deleted' => $this->deleted,
            'status' => $this->status,
            'total_revenue' => $this->total_revenue,
            'payable' => $this->payable,
            'recommended' => $this->recommended,
            'os' => $this->os,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'auth_token', $this->auth_token])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'payment_way', $this->payment_way])
            ->andFilterWhere(['like', 'beneficiary_name', $this->beneficiary_name])
            ->andFilterWhere(['like', 'bank_country', $this->bank_country])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name])
            ->andFilterWhere(['like', 'bank_address', $this->bank_address])
            ->andFilterWhere(['like', 'swift', $this->swift])
            ->andFilterWhere(['like', 'account_nu_iban', $this->account_nu_iban])
            ->andFilterWhere(['like', 'company_address', $this->company_address])
            ->andFilterWhere(['like', 'system', $this->system])
            ->andFilterWhere(['like', 'contacts', $this->contacts])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'cc_email', $this->cc_email])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone1', $this->phone1])
            ->andFilterWhere(['like', 'phone2', $this->phone2])
            ->andFilterWhere(['like', 'wechat', $this->wechat])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'alipay', $this->alipay])
            ->andFilterWhere(['like', 'lang', $this->lang])
            ->andFilterWhere(['like', 'timezone', $this->timezone])
            ->andFilterWhere(['like', 'traffic_source', $this->traffic_source])
            ->andFilterWhere(['like', 'pricing_mode', $this->pricing_mode])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'post_back', $this->post_back])
            ->andFilterWhere(['like', 'paid', $this->paid])
            ->andFilterWhere(['like', 'strong_geo', $this->strong_geo])
            ->andFilterWhere(['like', 'strong_category', $this->strong_category])
            ->andFilterWhere(['=', 'profile_complete', 100])
            ->andFilterWhere(['<>', 'approved', 1]);

        return $dataProvider;
    }
}
