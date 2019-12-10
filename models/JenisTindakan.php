<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_tindakan".
 *
 * @property int $id
 * @property string $tarif_id
 * @property string $treat_id
 * @property string $nama_tarif
 * @property int $CLASS_ID
 * @property string $TARIF_TYPE
 * @property string $IMPLEMENTED
 * @property string $ISCITO
 * @property string $biaya
 * @property string $MODIFIED_DATE
 * @property int $casemix_id
 */
class JenisTindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLASS_ID', 'casemix_id'], 'integer'],
            [['MODIFIED_DATE'], 'safe'],
            [['tarif_id'], 'string', 'max' => 50],
            [['treat_id', 'TARIF_TYPE'], 'string', 'max' => 25],
            [['nama_tarif'], 'string', 'max' => 200],
            [['IMPLEMENTED', 'ISCITO'], 'string', 'max' => 1],
            [['biaya'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tarif_id' => 'Tarif ID',
            'treat_id' => 'Treat ID',
            'nama_tarif' => 'Nama Tarif',
            'CLASS_ID' => 'Class  ID',
            'TARIF_TYPE' => 'Tarif  Type',
            'IMPLEMENTED' => 'Implemented',
            'ISCITO' => 'Iscito',
            'biaya' => 'Biaya',
            'MODIFIED_DATE' => 'Modified  Date',
            'casemix_id' => 'Casemix ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return JenisTindakanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JenisTindakanQuery(get_called_class());
    }
}
