<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planname".
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_kk
 * @property int|null $price
 * @property int|null $status
 */
class Planname extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planname';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'status'], 'integer'],
            [['name_ru', 'name_kk'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_ru' => 'Name Ru',
            'name_kk' => 'Name Kk',
            'price' => 'Price',
            'status' => 'Status',
        ];
    }
}
