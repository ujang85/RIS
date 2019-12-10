<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id
 * @property string $kode_pegawai
 * @property string $nama
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pegawai'], 'string', 'max' => 15],
            [['nama_pegawai'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_pegawai' => 'Kode Pegawai',
            'nama_pegawai' => 'Dokter',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PegawaiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PegawaiQuery(get_called_class());
    }
}
