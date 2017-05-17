<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "publisher".
 *
 * @property integer $id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property integer $type
 * @property string $auth_token
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $pm
 * @property integer $om
 * @property integer $master_publisher
 * @property string $payment_way
 * @property integer $payment_term
 * @property string $beneficiary_name
 * @property string $bank_country
 * @property string $bank_name
 * @property string $bank_address
 * @property string $swift
 * @property string $account_nu_iban
 * @property string $company_address
 * @property string $system
 * @property string $contacts
 * @property integer $created_time
 * @property integer $updated_time
 * @property string $email
 * @property string $cc_email
 * @property string $company
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $phone1
 * @property string $phone2
 * @property string $wechat
 * @property integer $qq
 * @property string $skype
 * @property string $alipay
 * @property string $lang
 * @property string $timezone
 * @property integer $firstaccess
 * @property integer $lastaccess
 * @property integer $picture
 * @property integer $confirmed
 * @property integer $suspended
 * @property integer $deleted
 * @property integer $status
 * @property string $traffic_source
 * @property string $pricing_mode
 * @property string $note
 * @property string $post_back
 * @property integer $total_revenue
 * @property integer $payable
 * @property string $paid
 * @property string $strong_geo
 * @property string $strong_category
 * @property integer $recommended
 * @property integer $os
 *
 * @property Publisher $masterPublisher
 * @property Publisher[] $publishers
 * @property User $om0
 */
class Publisher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publisher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'created_time', 'updated_time', 'email'], 'required'],
            [['type', 'pm', 'om', 'master_publisher', 'payment_term', 'created_time', 'updated_time', 'qq', 'firstaccess', 'lastaccess', 'picture', 'confirmed', 'suspended', 'deleted', 'status', 'total_revenue', 'payable', 'recommended', 'os'], 'integer'],
            [['cc_email', 'note'], 'string'],
            [['username', 'firstname', 'lastname', 'payment_way', 'beneficiary_name', 'system', 'contacts', 'alipay', 'timezone', 'traffic_source', 'pricing_mode'], 'string', 'max' => 100],
            [['auth_token', 'auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token', 'bank_country', 'bank_name', 'bank_address', 'swift', 'account_nu_iban', 'company_address', 'company', 'address', 'post_back', 'paid', 'strong_geo', 'strong_category'], 'string', 'max' => 255],
            [['email', 'wechat', 'skype'], 'string', 'max' => 50],
            [['country'], 'string', 'max' => 10],
            [['city'], 'string', 'max' => 120],
            [['phone1', 'phone2'], 'string', 'max' => 20],
            [['lang'], 'string', 'max' => 30],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['auth_token'], 'unique'],
            [['master_publisher'], 'exist', 'skipOnError' => true, 'targetClass' => Publisher::className(), 'targetAttribute' => ['master_publisher' => 'id']],
            [['om'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['om' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'type' => 'Type',
            'auth_token' => 'Auth Token',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'pm' => 'Pm',
            'om' => 'Om',
            'master_publisher' => 'Master Publisher',
            'payment_way' => 'Payment Way',
            'payment_term' => 'Payment Term',
            'beneficiary_name' => 'Beneficiary Name',
            'bank_country' => 'Bank Country',
            'bank_name' => 'Bank Name',
            'bank_address' => 'Bank Address',
            'swift' => 'Swift',
            'account_nu_iban' => 'Account Nu Iban',
            'company_address' => 'Company Address',
            'system' => 'System',
            'contacts' => 'Contacts',
            'created_time' => 'Created Time',
            'updated_time' => 'Updated Time',
            'email' => 'Email',
            'cc_email' => 'Cc Email',
            'company' => 'Company',
            'country' => 'Country',
            'city' => 'City',
            'address' => 'Address',
            'phone1' => 'Phone1',
            'phone2' => 'Phone2',
            'wechat' => 'Wechat',
            'qq' => 'Qq',
            'skype' => 'Skype',
            'alipay' => 'Alipay',
            'lang' => 'Lang',
            'timezone' => 'Timezone',
            'firstaccess' => 'Firstaccess',
            'lastaccess' => 'Lastaccess',
            'picture' => 'Picture',
            'confirmed' => 'Confirmed',
            'suspended' => 'Suspended',
            'deleted' => 'Deleted',
            'status' => 'Status',
            'traffic_source' => 'Traffic Source',
            'pricing_mode' => 'Pricing Mode',
            'note' => 'Note',
            'post_back' => 'Post Back',
            'total_revenue' => 'Total Revenue',
            'payable' => 'Payable',
            'paid' => 'Paid',
            'strong_geo' => 'Strong Geo',
            'strong_category' => 'Strong Category',
            'recommended' => 'Recommended',
            'os' => 'Os',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterPublisher()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'master_publisher']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublishers()
    {
        return $this->hasMany(Publisher::className(), ['master_publisher' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOm0()
    {
        return $this->hasOne(User::className(), ['id' => 'om']);
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->created_time = time();
            $this->updated_time = time();
        } else {
            $this->updated_time = time();
        }
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}
