<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_kk
 * @property int|null $price
 * @property string|null $one_ru
 * @property string|null $one_kk
 * @property string|null $two_ru
 * @property string|null $two_kk
 * @property string|null $three_ru
 * @property string|null $three_kk
 * @property string|null $four_ru
 * @property string|null $four_kk
 * @property string|null $five_ru
 * @property string|null $five_kk
 * @property int|null $status
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'status'], 'integer'],
            [['name_ru', 'name_kk', 'one_ru', 'one_kk', 'two_ru', 'two_kk', 'three_ru', 'three_kk', 'four_ru', 'four_kk', 'five_ru', 'five_kk'], 'string', 'max' => 255],
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
            'one_ru' => 'One Ru',
            'one_kk' => 'One Kk',
            'two_ru' => 'Two Ru',
            'two_kk' => 'Two Kk',
            'three_ru' => 'Three Ru',
            'three_kk' => 'Three Kk',
            'four_ru' => 'Four Ru',
            'four_kk' => 'Four Kk',
            'five_ru' => 'Five Ru',
            'five_kk' => 'Five Kk',
            'status' => 'Status',
        ];
    }
}
