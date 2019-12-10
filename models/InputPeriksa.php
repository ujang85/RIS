<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "input_periksa".
 *
 * @property int $id_periksa
 * @property string $id_kunjungan
 * @property int $id_jenis_tindakan
 * @property int $biaya
 * @property int $qty
 * @property int $subtotal
 */
class InputPeriksa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'input_periksa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['biaya', 'qty','id', 'subtotal'], 'integer'],
            [['id_jenis_tindakan','id_kunjungan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_periksa' => 'Id Periksa',
            'id_kunjungan' => 'Id Kunjungan',
            'id_jenis_tindakan' => 'Id Jenis Tindakan',
            'biaya' => 'Biaya',
            'qty' => 'Qty',
            'subtotal' => 'Subtotal',
        ];
    }

    /**
     * {@inheritdoc}
     * @return InputPeriksaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InputPeriksaQuery(get_called_class());
    }
}
