<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asuransi".
 *
 * @property int $id
 * @property int $status_pasien_id
 * @property string $nama_status
 * @property string $payor_id
 */
class Asuransi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asuransi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_pasien_id'], 'integer'],
            [['nama_status', 'payor_id'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_pasien_id' => 'Status Pasien ID',
            'nama_status' => 'Asuransi',
            'payor_id' => 'Payor ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AsuransiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AsuransiQuery(get_called_class());
    }
}
