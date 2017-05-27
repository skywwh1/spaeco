<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pub_education".
 *
 * @property integer $id
 * @property integer $pub_id
 * @property string $school
 * @property string $degree
 * @property string $major
 * @property integer $start_time
 * @property integer $end_time
 * @property string $grade
 * @property string $school_activity
 * @property string $achievement
 * @property integer $create_time
 * @property integer $update_time
 *
 * @property Publisher $pub
 */
class PubEducation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pub_education';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pub_id'], 'required'],
            [['pub_id', 'start_time', 'end_time', 'create_time', 'update_time'], 'integer'],
            [['school_activity', 'achievement'], 'string'],
            [['school', 'degree', 'major', 'grade'], 'string', 'max' => 255],
            [['pub_id'], 'exist', 'skipOnError' => true, 'targetClass' => Publisher::className(), 'targetAttribute' => ['pub_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pub_id' => 'Pub ID',
            'school' => 'School',
            'degree' => 'Degree',
            'major' => 'Major',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'grade' => 'Grade',
            'school_activity' => 'School Activity',
            'achievement' => 'Achievement',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPub()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'pub_id']);
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        $adv = $this->pub;
        $adv->setProfileComplete();
        $adv->save();
    }
}
