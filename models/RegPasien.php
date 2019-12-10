<?php

namespace app\models;

use Yii;
use yii\data\SqlDataProvider;
use yii\data\ActiveDataProvider;
use app\models\Pegawai;
/**
 * This is the model class for table "reg_pasien".
 *
 * @property int $id
 * @property string $no_cm
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $sex
 * @property string $id_kunjungan
 * @property int $asuransi
 * @property string $tgl_kunjungan
 * @property string $dokter
 * @property int $lama_baru
 * @property int $umur_tahun
 * @property int $umur_bulan
 * @property int $umur_hari
 * @property int $rujukan_asal
 * @property string $klinik_asal
 */
class RegPasien extends \yii\db\ActiveRecord
{
    public $id_jenis_tindakan;
    public $qty;
    public $biaya;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reg_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asuransi','rujukan_asal', 'lama_baru', 'umur_tahun', 'umur_bulan', 'umur_hari'], 'integer'],
            [['tgl_kunjungan'], 'safe'],
            [['no_cm', 'tgl_lahir', 'sex'], 'string', 'max' => 15],
            [['nama','kesan','hasil_bacaan'], 'string', 'max' => 900],
         //   [['rujukan_asal'],'string', 'max' => 50],
            [['id_kunjungan'],'unique'],
            [['dokter'], 'string', 'max' => 100],
            [['klinik_asal'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_cm' => 'No Cm',
            'nama' => 'Nama',
            'tgl_lahir' => 'Tgl Lahir',
            'sex' => 'Sex',
            'id_kunjungan' => 'Id Kunjungan',
            'asuransi' => 'Asuransi',
            'tgl_kunjungan' => 'Tgl Kunjungan',
            'dokter' => 'Dokter',
            'lama_baru' => 'Lama Baru',
            'umur_tahun' => 'Umur Tahun',
            'umur_bulan' => 'Umur Bulan',
            'umur_hari' => 'Umur Hari',
            'rujukan_asal' => 'Rujukan Asal',
            'klinik_asal' => 'Klinik Asal',
        ];
    }
    public function getNama()
    {
        return $this->hasOne(PASIEN::className(), [ 'NO_REGISTRATION'=> 'no_cm']);
      
    }

    public function getPegawai2()
    {
        return $this->hasOne(Pegawai::className(),['kode_pegawai'=>'dokter']);
      
    }
    public function getJaminan()
    {
        return $this->hasOne(Asuransi::className(), [ 'status_pasien_id'=>'asuransi' ]);
      
    }
    public function getKelamin()
    {
        return $this->hasOne(Gender::className(), [ 'id'=>'sex' ]);
    }
    public function getPeriksa()
    {
        return $this->hasMany(InputPeriksa::className(), ['id_kunjungan' => 'id_kunjungan']);
      
    }
    public function getPeriksa2()
    {

        $sql = "SELECT GROUP_CONCAT(jenis_tindakan.nama_tarif SEPARATOR ', ') AS tarif
        FROM input_periksa LEFT JOIN jenis_tindakan
        ON input_periksa.id_jenis_tindakan=jenis_tindakan.id
        WHERE id_kunjungan='201501191208390433778'
        GROUP BY id_kunjungan";
        $hasil=Yii::$app->db->createCommand($sql)->queryScalar(); 
        return $hasil;
        /* 
        $sql = "SELECT GROUP_CONCAT(jenis_tindakan.nama_tarif SEPARATOR ', ') AS tarif
        FROM input_periksa LEFT JOIN jenis_tindakan
        ON input_periksa.id_jenis_tindakan=jenis_tindakan.id
        WHERE id_kunjungan='201501191208390433778'
        GROUP BY id_kunjungan";
        $hasil=Yii::$app->db->createCommand($sql)->queryScalar();
        return $hasil; 
     //  var_dump($hasil);
     //  echo $hasil;
     //  die();

    WHERE id_kunjungan=:id_kunjungan GROUP BY id_kunjungan ;")
        ->bindValue(':id_kunjungan', $id_kunjungan) 
        ->queryScalar();

      */
      }
    
    /**
     * {@inheritdoc}
     * @return RegPasienQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RegPasienQuery(get_called_class());
    }
}

/*

public function getNama()
    {
        return $this->hasOne(tabel A::className(), [ 'no_rm'=> 'no_cm']);
    }
*/