<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quote".
 *
 * @property int $id
 * @property string|null $departure
 * @property string|null $delivery
 * @property string|null $weight
 * @property string|null $dimension
 * @property string|null $name
 * @property string|null $email
 * @property int|null $phone
 * @property string|null $message
 * @property string|null $answer
 * @property int|null $status
 */
class Quote extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quote';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone', 'status'], 'integer'],
            [['message', 'answer'], 'string'],
            [['departure', 'delivery', 'weight', 'dimension', 'name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'departure' => 'Departure',
            'delivery' => 'Delivery',
            'weight' => 'Weight',
            'dimension' => 'Dimension',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'message' => 'Message',
            'answer' => 'Answer',
            'status' => 'Status',
        ];
    }
}
