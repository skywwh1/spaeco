<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "campaign".
 *
 * @property integer $id
 * @property integer $advertiser
 * @property string $campaign_name
 * @property string $campaign_uuid
 * @property string $pricing_mode
 * @property string $payout_currency
 * @property integer $promote_start
 * @property integer $promote_end
 * @property integer $effective_time
 * @property integer $adv_update_time
 * @property string $device
 * @property string $platform
 * @property string $min_version
 * @property string $max_version
 * @property integer $daily_cap
 * @property string $daily_budget
 * @property string $adv_price
 * @property string $now_payout
 * @property string $target_geo
 * @property string $traffic_source
 * @property string $kpi
 * @property string $note
 * @property string $others
 * @property string $preview_link
 * @property string $icon
 * @property string $package_name
 * @property string $app_name
 * @property string $app_size
 * @property string $category
 * @property string $version
 * @property string $app_rate
 * @property string $description
 * @property string $creative_link
 * @property string $creative_type
 * @property string $creative_description
 * @property string $carriers
 * @property string $conversion_flow
 * @property integer $recommended
 * @property integer $indirect
 * @property string $epc
 * @property string $avg_price
 * @property integer $tag
 * @property integer $direct
 * @property integer $status
 * @property integer $open_type
 * @property integer $subid_status
 * @property string $track_way
 * @property integer $third_party
 * @property string $track_link_domain
 * @property string $adv_link
 * @property integer $link_type
 * @property string $other_setting
 * @property string $ip_blacklist
 * @property integer $creator
 * @property integer $create_time
 * @property integer $update_time
 *
 * @property Advertiser $advertiser0
 * @property User $creator0
 */
class Campaign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['advertiser', 'campaign_name', 'now_payout', 'adv_link', 'creator', 'create_time', 'update_time'], 'required'],
            [['advertiser', 'promote_start', 'promote_end', 'effective_time', 'adv_update_time', 'daily_cap', 'recommended', 'indirect', 'tag', 'direct', 'status', 'open_type', 'subid_status', 'third_party', 'link_type', 'creator', 'create_time', 'update_time'], 'integer'],
            [['adv_price', 'now_payout', 'avg_price'], 'number'],
            [['kpi', 'note', 'others', 'description'], 'string'],
            [['campaign_name', 'target_geo', 'preview_link', 'icon', 'category', 'creative_link', 'creative_type', 'creative_description', 'track_way', 'track_link_domain', 'adv_link', 'other_setting', 'ip_blacklist'], 'string', 'max' => 255],
            [['campaign_uuid', 'pricing_mode', 'payout_currency', 'device', 'platform', 'min_version', 'max_version', 'daily_budget', 'traffic_source', 'package_name', 'app_name', 'app_size', 'version', 'app_rate', 'carriers', 'conversion_flow', 'epc'], 'string', 'max' => 100],
            [['campaign_uuid'], 'unique'],
            [['advertiser'], 'exist', 'skipOnError' => true, 'targetClass' => Advertiser::className(), 'targetAttribute' => ['advertiser' => 'id']],
            [['creator'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creator' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'advertiser' => 'Advertiser',
            'campaign_name' => 'Campaign Name',
            'campaign_uuid' => 'Campaign Uuid',
            'pricing_mode' => 'Pricing Mode',
            'payout_currency' => 'Payout Currency',
            'promote_start' => 'Promote Start',
            'promote_end' => 'Promote End',
            'effective_time' => 'Effective Time',
            'adv_update_time' => 'Adv Update Time',
            'device' => 'Device',
            'platform' => 'Platform',
            'min_version' => 'Min Version',
            'max_version' => 'Max Version',
            'daily_cap' => 'Daily Cap',
            'daily_budget' => 'Daily Budget',
            'adv_price' => 'Adv Price',
            'now_payout' => 'Now Payout',
            'target_geo' => 'Target Geo',
            'traffic_source' => 'Traffic Source',
            'kpi' => 'Kpi',
            'note' => 'Note',
            'others' => 'Others',
            'preview_link' => 'Preview Link',
            'icon' => 'Icon',
            'package_name' => 'Package Name',
            'app_name' => 'App Name',
            'app_size' => 'App Size',
            'category' => 'Category',
            'version' => 'Version',
            'app_rate' => 'App Rate',
            'description' => 'Description',
            'creative_link' => 'Creative Link',
            'creative_type' => 'Creative Type',
            'creative_description' => 'Creative Description',
            'carriers' => 'Carriers',
            'conversion_flow' => 'Conversion Flow',
            'recommended' => 'Recommended',
            'indirect' => 'Indirect',
            'epc' => 'Epc',
            'avg_price' => 'Avg Price',
            'tag' => 'Tag',
            'direct' => 'Direct',
            'status' => 'Status',
            'open_type' => 'Open Type',
            'subid_status' => 'Subid Status',
            'track_way' => 'Track Way',
            'third_party' => 'Third Party',
            'track_link_domain' => 'Track Link Domain',
            'adv_link' => 'Adv Link',
            'link_type' => 'Link Type',
            'other_setting' => 'Other Setting',
            'ip_blacklist' => 'Ip Blacklist',
            'creator' => 'Creator',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvertiser0()
    {
        return $this->hasOne(Advertiser::className(), ['id' => 'advertiser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreator0()
    {
        return $this->hasOne(User::className(), ['id' => 'creator']);
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->create_time = time();
            $this->update_time = time();
        } else {
            $this->update_time = time();
        }
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}
