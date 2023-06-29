<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "action".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $descrip
 * @property string|null $link
 * @property int|null $status
 */
class Action extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'action';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['title_ru', 'title_kk', 'descrip_ru', 'descrip_kk', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title_RU',
            'title_kk' => 'Title_KK',
            'descrip_ru' => 'Descrip_RU',
            'descrip_kk' => 'Descrip_KK',
            'link' => 'Link',
            'status' => 'Status',
        ];
    }
}
