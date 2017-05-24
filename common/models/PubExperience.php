<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pub_experience".
 *
 * @property integer $id
 * @property integer $pub_id
 * @property string $title
 * @property string $company
 * @property string $address
 * @property integer $start_time
 * @property integer $end_time
 * @property string $content
 * @property integer $create_time
 * @property integer $update_time
 *
 * @property Publisher $pub
 */
class PubExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pub_experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pub_id'], 'required'],
            [['pub_id', 'start_time', 'end_time', 'create_time', 'update_time'], 'integer'],
            [['content'], 'string'],
            [['title', 'company', 'address'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'company' => 'Company',
            'address' => 'Address',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'content' => 'Content',
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
}
