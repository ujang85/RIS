<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "id_proses".
 *
 * @property string $ket_input
 * @property int $kode
 * @property int $id
 */
class IdProses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'id_proses';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('dbrs');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ket_input'], 'string'],
            [['kode', 'id'], 'integer'],
            [['id'], 'required'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ket_input' => 'Ket Input',
            'kode' => 'Kode',
            'id' => 'ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return IdProsesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IdProsesQuery(get_called_class());
    }
}
