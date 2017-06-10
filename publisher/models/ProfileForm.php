<?php

namespace publisher\models;

use common\models\Publisher;
use Yii;
use yii\base\Model;

/**
 * Login form
 */
class ProfileForm extends Model
{
    public $verticals;
    public $sources;
    public $basis;
    public $geo;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // email and password are both required
            [['verticals', 'sources', 'basis', 'geo'], 'required'],
            [['verticals', 'sources', 'basis', 'geo'], 'safe'],
            ['geo', 'checkGeo']
        ];
    }

    public function updateProfile()
    {
        $pub = Publisher::findOne(['id' => Yii::$app->user->id]);
        $pub->vertical = is_array($this->verticals) ? implode(',', $this->verticals) : $this->verticals;
        $pub->source = is_array($this->sources) ? implode(',', $this->sources) : $this->sources;
        $pub->pricing_mode = is_array($this->basis) ? implode(',', $this->basis) : $this->basis;
        $pub->geo = is_array($this->geo) ? implode(',', $this->geo) : $this->geo;
        $pub->firstaccess = time();
        if ($pub->save()) {
            return true;
        }
        return false;

    }

    public function checkGeo($attribute, $params, $validator)
    {
        if (count($this->$attribute) < 5) {
            $this->addError($attribute, 'At least 5 GEO');
        }
    }

    public function beforeUpdateProfile()
    {
        $pub = Publisher::findOne(['id' => Yii::$app->user->id]);
        if (isset($pub->vertical)) {
            $this->verticals = explode(',', $pub->vertical);
        }
        if (isset($pub->source)) {
            $this->sources = explode(',', $pub->source);
        }
        if (isset($pub->pricing_mode)) {
            $this->basis = explode(',', $pub->pricing_mode);
        }
        if (isset($pub->geo)) {
            $this->geo = explode(',', $pub->geo);
        }
    }

}
