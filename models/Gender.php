<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gender".
 *
 * @property int $id
 * @property string $gender
 */
class Gender extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gender';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gender'], 'string', 'max' => 20],
            [['ket'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gender' => 'Gender',
        ];
    }

    /**
     * {@inheritdoc}
     * @return GenderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GenderQuery(get_called_class());
    }
}
