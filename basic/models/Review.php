<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id
 * @property string $img
 * @property string $name
 * @property string $job
 * @property string $rate
 * @property string $review
 * @property int $status
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'img', 'name_ru', 'name_kk', 'job_ru', 'job_kk', 'rate', 'review_ru', 'review_kk', 'status'], 'required'],
            [['id', 'status'], 'integer'],
            [['img', 'name_ru', 'name_kk', 'job_ru', 'job_kk', 'rate', 'review_ru', 'review_kk'], 'string', 'max' => 255],
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
            'name_ru' => 'Name_RU',
            'name_kk' => 'Name_KK',
            'job_ru' => 'Job_RU',
            'job_kk' => 'Job_KK',
            'rate' => 'Rate',
            'review_ru' => 'Review_RU',
            'review_kk' => 'Review_KK',
            'status' => 'Status',
        ];
    }
}
