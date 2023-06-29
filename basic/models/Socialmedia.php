<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "socialmedia".
 *
 * @property int $id
 * @property string|null $icon
 * @property string|null $link
 * @property int|null $team_id
 */
class Socialmedia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'socialmedia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['team_id'], 'integer'],
            [['icon', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icon' => 'Icon',
            'link' => 'Link',
            'team_id' => 'Team ID',
        ];
    }
}
