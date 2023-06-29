<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aboutus".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_kk
 * @property string|null $descrip_ru
 * @property string|null $descrip_kk
 * @property string|null $img
 * @property string|null $link
 * @property int|null $status
 */
class Aboutus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aboutus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descrip_ru', 'descrip_kk'], 'string'],
            [['status'], 'integer'],
            [['title_ru', 'title_kk', 'img', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title Ru',
            'title_kk' => 'Title Kk',
            'descrip_ru' => 'Descrip Ru',
            'descrip_kk' => 'Descrip Kk',
            'img' => 'Img',
            'link' => 'Link',
            'status' => 'Status',
        ];
    }
}
