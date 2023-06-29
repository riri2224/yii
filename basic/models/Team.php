<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $name_ru
 * @property string|null $name_kk
 * @property string|null $job_ru
 * @property string|null $job_kk
 * @property string|null $phrase_ru
 * @property string|null $phrase_kk
 * @property int|null $status
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['img', 'name_ru', 'name_kk', 'job_ru', 'job_kk', 'phrase_ru', 'phrase_kk'], 'string', 'max' => 255],
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
            'name_ru' => 'Name Ru',
            'name_kk' => 'Name Kk',
            'job_ru' => 'Job Ru',
            'job_kk' => 'Job Kk',
            'phrase_ru' => 'Phrase Ru',
            'phrase_kk' => 'Phrase Kk',
            'status' => 'Status',
        ];
    }
}
