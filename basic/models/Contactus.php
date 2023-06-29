<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactus".
 *
 * @property int $id
 * @property string|null $urname
 * @property string|null $urmail
 * @property string|null $subject
 * @property string|null $place
 * @property string|null $message
 * @property string|null $answer
 * @property int|null $status
 */
class Contactus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message', 'answer'], 'string'],
            [['status'], 'integer'],
            [['urname', 'urmail', 'subject', 'place'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'urname' => 'Urname',
            'urmail' => 'Urmail',
            'subject' => 'Subject',
            'place' => 'Place',
            'message' => 'Message',
            'answer' => 'Answer',
            'status' => 'Status',
        ];
    }
}
