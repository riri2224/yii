<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feature".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $title
 * @property string|null $subdescrip
 * @property string|null $descrip
 * @property int|null $status
 */
class Feature extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feature';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descrip_ru', 'descrip_kk'], 'string'],
            [['status'], 'integer'],
            [['img', 'title_ru', 'title_kk', 'subdescrip_ru', 'subdescrip_kk'], 'string', 'max' => 255],
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
            'subdescrip_ru' => 'Subdescrip_RU',
            'subdescrip_kk' => 'Subdescrip_KK',
            'descrip_ru' => 'Descrip_RU',
            'descrip_kk' => 'Descrip_KK',
            'status' => 'Status',
        ];
    }
}
