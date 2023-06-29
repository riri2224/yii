<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property int $id
 * @property string $question
 * @property string $answer
 * @property int $status
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'question_ru', 'question_kk', 'answer_ru', 'answer_kk', 'status'], 'required'],
            [['answer_ru', 'answer_kk'], 'string'],
            [['id', 'status'], 'integer'],
            [['question_ru', 'question_kk'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question_ru' => 'Question_RU',
            'question_kk' => 'Question_KK',
            'answer_ru' => 'Answer_RU',
            'answer_kk' => 'Answer_KK',
            'status' => 'Status',
        ];
    }
}
