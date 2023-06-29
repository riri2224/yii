<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "counts".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $numbers
 * @property int|null $status
 */
class Counts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'counts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numbers', 'status'], 'integer'],
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
            'name_ru' => 'Name_RU',
            'name_kk' => 'Name_KK',
            'numbers' => 'Numbers',
            'status' => 'Status',
        ];
    }
}
