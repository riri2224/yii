<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $title
 * @property string|null $desc
 * @property int|null $status
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desc_ru', 'desc_kk'], 'string'],
            [['status'], 'integer'],
            [['img', 'title_ru', 'title_kk'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'title_ru' => 'Title_RU',
            'title_kk' => 'Title_KK',
            'desc_ru' => 'Desc_RU',
            'desc_kk' => 'Desc_KK',
            'status' => 'Status',
        ];
    }
}
