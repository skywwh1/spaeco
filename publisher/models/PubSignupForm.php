<?php

namespace publisher\models;

use common\models\Publisher;
use yii\base\Model;

/**
 * Signup form
 */
class PubSignupForm extends Model
{
    public $username;
    public $email;
    public $password;

    public $company;
    public $address;
    public $confirm;
    public $firstname;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\Publisher', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\Publisher', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

//            ['password_hash', 'match', 'pattern' => '/^(\w){6,20}$/', 'message' => 'Password at least 6 characters'],
            ['confirm', 'required'],
            ['confirm', 'compare', 'compareAttribute' => 'password', 'message' => "Passwords don't match"],

            ['firstname', 'required'],
            ['address', 'required'],

            ['company', 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'firstname' => 'Full Name',
        ];
    }
    /**
     * Signs user up.
     *
     * @return Publisher|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new Publisher();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->company = $this->company;
        $user->address = $this->address;
        $user->firstname = $this->firstname;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
}
