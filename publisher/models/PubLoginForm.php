<?php
namespace publisher\models;

use common\models\Publisher;
use Yii;
use yii\base\Model;
use yii\web\User;

/**
 * Login form
 */
class PubLoginForm extends Model
{
    public $email;
    public $password;
    public $rememberMe = true;
    public $verifyCode;
    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // email and password are both required
            [['email', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect email or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided email and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            $user = \Yii::$app->user;
            $user->on($user::EVENT_AFTER_LOGIN,function($event){
                $admin=$event->identity;
                $admin->lastaccess=time();
                $admin->save();
            });
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[email]]
     *
     * @return Publisher|null
     */
    protected function getUser()
    {

        if ($this->_user === null) {
            $this->_user = Publisher::findByEmail($this->email);
        }
        return $this->_user;
    }
}
