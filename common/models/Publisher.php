<?php

namespace common\models;

use mootensai\relation\RelationTrait;
use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

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
 * @property integer $create_time
 * @property integer $update_time
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
 * @property integer $profile_complete
 *
 * @property PubEducation[] $pubEducations
 * @property PubExperience[] $pubExperiences
 * @property Publisher $masterPublisher
 * @property Publisher[] $publishers
 * @property User $om0
 */
class Publisher extends ActiveRecord implements IdentityInterface
{
    use RelationTrait;
    const STATUS_ACTIVE = 1;
    public $password;

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
            [['username', 'email', 'firstname', 'company', 'address'], 'required'],
            [['type', 'pm', 'om', 'master_publisher', 'payment_term', 'create_time', 'update_time', 'qq', 'firstaccess', 'lastaccess', 'picture', 'confirmed', 'suspended', 'deleted', 'status', 'total_revenue', 'payable', 'recommended', 'os', 'profile_complete'], 'integer'],
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
            ['password', 'safe'],
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
            'create_time' => 'Created Time',
            'update_time' => 'Updated Time',
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
            'profile_complete' => 'Profile Complete',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPubEducations()
    {
        return $this->hasMany(PubEducation::className(), ['pub_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPubExperiences()
    {
        return $this->hasMany(PubExperience::className(), ['pub_id' => 'id']);
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
            $this->create_time = time();
            $this->update_time = time();
        } else {
            $this->update_time = time();
        }
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int)substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}
