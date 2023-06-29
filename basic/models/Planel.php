<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planel".
 *
 * @property int $id
 * @property string|null $name_ru
 * @property string|null $name_kk
 * @property int|null $planname_id
 * @property int|null $status
 */
class Planel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['planname_id', 'status'], 'integer'],
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
            'planname_id' => 'Planname ID',
            'status' => 'Status',
        ];
    }
}
