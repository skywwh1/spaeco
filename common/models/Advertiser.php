<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "advertiser".
 *
 * @property integer $id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property integer $payment_term
 * @property integer $pm
 * @property integer $bd
 * @property string $system
 * @property integer $status
 * @property string $contacts
 * @property double $total_revenue
 * @property double $receivable
 * @property double $received
 * @property string $pricing_mode
 * @property integer $type
 * @property string $auth_token
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $create_time
 * @property integer $update_time
 * @property string $post_parameter
 * @property string $email
 * @property string $cc_email
 * @property string $company
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $phone1
 * @property string $phone2
 * @property string $weixin
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
 * @property string $ip_whitelist
 * @property string $note
 *
 * @property User $bd0
 */
class Advertiser extends ActiveRecord implements IdentityInterface
{
    const STATUS_ACTIVE = 1;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advertiser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email'], 'required'],
            [['payment_term', 'pm', 'status', 'type', 'create_time', 'update_time', 'qq', 'firstaccess', 'lastaccess', 'picture', 'confirmed', 'suspended', 'deleted'], 'integer'],
            [['total_revenue', 'receivable', 'received'], 'number'],
            [['note'], 'string'],
            [['username', 'firstname', 'lastname', 'system', 'pricing_mode', 'alipay', 'timezone'], 'string', 'max' => 100],
            [['contacts', 'password_hash', 'password_reset_token', 'post_parameter', 'company', 'address', 'ip_whitelist'], 'string', 'max' => 255],
            [['auth_token', 'auth_key'], 'string', 'max' => 32],
            [['email', 'cc_email', 'weixin', 'skype'], 'string', 'max' => 50],
            [['country'], 'string', 'max' => 10],
            [['city'], 'string', 'max' => 120],
            [['phone1', 'phone2'], 'string', 'max' => 20],
            [['lang'], 'string', 'max' => 30],
            [['username'], 'unique'],
            [['email'], 'unique'],
            ['email', 'email'],
            [['password_reset_token'], 'unique'],
            [['auth_token'], 'unique'],
            [['bd'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['bd' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Advertiser',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'team' => 'Team',
            'payment_term' => 'Payment Term',
            'pm' => 'PM',
            'bd' => 'BD',
            'system' => 'System',
            'status' => 'Status',
            'contacts' => 'Contacts',
            'total_revenue' => 'Total Revenue',
            'receivable' => 'Receivable',
            'received' => 'Received',
            'pricing_mode' => 'Pricing Mode',
            'type' => 'Type',
            'auth_token' => 'Auth Token',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'create_time' => 'Created Time',
            'update_time' => 'Updated Time',
            'email' => 'Email',
            'cc_email' => 'Cc Email',
            'company' => 'Company',
            'phone1' => 'Phone',
            'country' => 'Country',
            'city' => 'City',
            'address' => 'Address',
            'phone2' => 'Phone2',
            'weixin' => 'Weixin',
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
            'note' => 'Note',
        ];
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBd0()
    {
        return $this->hasOne(User::className(), ['id' => 'bd']);
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
