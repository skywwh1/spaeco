<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property integer $id
 * @property integer $send_id
 * @property integer $receive_id
 * @property integer $status
 * @property integer $create_time
 *
 * @property MessageContent $messageContent
 */
class Message extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['send_id', 'receive_id'], 'required'],
//            [['message_context_id'], 'required', 'message' => 'Message cannot be null'],
            [['send_id', 'receive_id', 'status', 'create_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'send_id' => 'Send ID',
            'receive_id' => 'Receive ID',
            'status' => 'Status',
            'create_time' => 'Create Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessageContent()
    {
        return $this->hasOne(MessageContent::className(), ['id' => 'id']);
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->create_time = time();
        }
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }


    public function getChat($send_id, $receive_id)
    {
        $query = Message::find();
        $query->where(['and', ['send_id' => $send_id], ['receive_id' => $receive_id]]);
        $query->orFilterWhere(['and', ['send_id' => $receive_id], ['receive_id' => $send_id]]);
        $query->orderBy('create_time desc');
        return $query->all();
    }

    public static function findUnread($userid)
    {
        $query = static::find();
        $query->where(['receive_id'=>$userid]);
        return $query->all();
    }
}
