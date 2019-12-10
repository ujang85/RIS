<?php

namespace app\models;

use Yii;
use app\models\PASIEN;

/**
 * This is the model class for table "PASIEN_VISITATION".
 *
 * @property string $ORG_UNIT_CODE
 * @property string $NO_REGISTRATION
 * @property string $VISIT_ID
 * @property int $STATUS_PASIEN_ID
 * @property int $RUJUKAN_ID
 * @property string $ADDRESS_OF_RUJUKAN
 * @property int $REASON_ID
 * @property int $WAY_ID
 * @property int $PATIENT_CATEGORY_ID
 * @property string $BOOKED_DATE
 * @property string $VISIT_DATE
 * @property string $ISNEW
 * @property int $FOLLOW_UP
 * @property int $PLACE_TYPE
 * @property string $CLINIC_ID
 * @property string $CLINIC_ID_FROM
 * @property string $CLASS_ROOM_ID
 * @property int $BED_ID
 * @property int $KELUAR_ID
 * @property string $IN_DATE
 * @property string $EXIT_DATE
 * @property string $DIANTAR_OLEH
 * @property string $GENDER
 * @property string $DESCRIPTION
 * @property string $VISITOR_ADDRESS
 * @property string $MODIFIED_BY
 * @property string $MODIFIED_DATE
 * @property string $MODIFIED_FROM
 * @property string $EMPLOYEE_ID
 * @property string $EMPLOYEE_ID_FROM
 * @property int $RESPONSIBLE_ID
 * @property string $RESPONSIBLE
 * @property int $FAMILY_STATUS_ID
 * @property int $TICKET_NO
 * @property string $ISATTENDED
 * @property string $PAYOR_ID
 * @property int $CLASS_ID
 * @property string $ISPERTARIF
 * @property string $KAL_ID
 * @property string $EMPLOYEE_INAP
 * @property string $PASIEN_ID
 * @property string $KARYAWAN
 * @property string $ACCOUNT_ID
 * @property int $CLASS_ID_PLAFOND
 * @property string $BACKCHARGE
 * @property int $COVERAGE_ID
 * @property int $AGEYEAR
 * @property int $AGEMONTH
 * @property int $AGEDAY
 * @property string $RECOMENDATION
 * @property string $CONCLUSION
 * @property string $SPECIMENNO
 * @property string $LOCKED
 * @property string $RM_OUT_DATE
 * @property string $RM_IN_DATE
 * @property string $LAMA_PINJAM
 * @property string $STANDAR_RJ
 * @property string $LENGKAP_RJ
 * @property string $LENGKAP_RI
 * @property string $RESEND_RM_DATE
 * @property string $LENGKAP_RM1
 * @property string $LENGKAP_RESUME
 * @property string $LENGKAP_ANAMNESIS
 * @property string $LENGKAP_CONSENT
 * @property string $LENGKAP_ANESTESI
 * @property string $LENGKAP_OP
 * @property string $BACK_RM_DATE
 * @property string $VALID_RM_DATE
 * @property string $NO_SKP
 * @property string $DIAGNOSA_ID
 * @property int $TICKET_ALL
 * @property string $SERVICED_TIME
 * @property string $NO_SKPINAP
 * @property string $TANGGAL_RUJUKAN
 * @property string $SEP_PRINTDATE
 *
 * @property DIETINAP[] $dIETINAPs
 * @property PASIENSPECIMEN[] $pASIENSPECIMENs
 */
class PasienVisitation extends \yii\db\ActiveRecord
{
    public $NAME_OF_PASIEN;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'PASIEN_VISITATION';
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
            [['ORG_UNIT_CODE', 'NO_REGISTRATION'], 'required'],
            [['ORG_UNIT_CODE', 'NO_REGISTRATION', 'VISIT_ID', 'ADDRESS_OF_RUJUKAN', 'ISNEW', 'CLINIC_ID', 'CLINIC_ID_FROM', 'CLASS_ROOM_ID', 'DIANTAR_OLEH', 'GENDER', 'DESCRIPTION', 'VISITOR_ADDRESS', 'MODIFIED_BY', 'MODIFIED_FROM', 'EMPLOYEE_ID', 'EMPLOYEE_ID_FROM', 'RESPONSIBLE', 'ISATTENDED', 'PAYOR_ID', 'ISPERTARIF', 'KAL_ID', 'EMPLOYEE_INAP', 'PASIEN_ID', 'KARYAWAN', 'ACCOUNT_ID', 'BACKCHARGE', 'RECOMENDATION', 'CONCLUSION', 'SPECIMENNO', 'LOCKED', 'STANDAR_RJ', 'LENGKAP_RJ', 'LENGKAP_RI', 'LENGKAP_RM1', 'LENGKAP_RESUME', 'LENGKAP_ANAMNESIS', 'LENGKAP_CONSENT', 'LENGKAP_ANESTESI', 'LENGKAP_OP', 'NO_SKP', 'DIAGNOSA_ID', 'NO_SKPINAP', 'SEP_PRINTDATE'], 'string'],
            [['STATUS_PASIEN_ID', 'RUJUKAN_ID', 'REASON_ID', 'WAY_ID', 'PATIENT_CATEGORY_ID', 'FOLLOW_UP', 'PLACE_TYPE', 'BED_ID', 'KELUAR_ID', 'RESPONSIBLE_ID', 'FAMILY_STATUS_ID', 'TICKET_NO', 'CLASS_ID', 'CLASS_ID_PLAFOND', 'COVERAGE_ID', 'AGEYEAR', 'AGEMONTH', 'AGEDAY', 'TICKET_ALL'], 'integer'],
            [['RAD_INPUT','BOOKED_DATE', 'VISIT_DATE', 'IN_DATE', 'EXIT_DATE', 'MODIFIED_DATE', 'RM_OUT_DATE', 'RM_IN_DATE', 'LAMA_PINJAM', 'RESEND_RM_DATE', 'BACK_RM_DATE', 'VALID_RM_DATE', 'SERVICED_TIME', 'TANGGAL_RUJUKAN'], 'safe'],
            [['NO_REGISTRATION', 'ORG_UNIT_CODE', 'VISIT_ID'], 'unique', 'targetAttribute' => ['NO_REGISTRATION', 'ORG_UNIT_CODE', 'VISIT_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ORG_UNIT_CODE' => 'Org  Unit  Code',
            'NO_REGISTRATION' => 'No Rekam Medis',
            'VISIT_ID' => 'Kode Kunjungan',
            'STATUS_PASIEN_ID' => 'Status  Pasien  ID',
            'RUJUKAN_ID' => 'Rujukan  ID',
            'ADDRESS_OF_RUJUKAN' => 'Address  Of  Rujukan',
            'REASON_ID' => 'Reason  ID',
            'WAY_ID' => 'Way  ID',
            'PATIENT_CATEGORY_ID' => 'Patient  Category  ID',
            'BOOKED_DATE' => 'Booked  Date',
            'VISIT_DATE' => 'Tanggal Kunjungan ',
            'ISNEW' => 'Isnew',
            'FOLLOW_UP' => 'Follow  Up',
            'PLACE_TYPE' => 'Place  Type',
            'CLINIC_ID' => 'Clinic  ID',
            'CLINIC_ID_FROM' => 'Clinic  Id  From',
            'CLASS_ROOM_ID' => 'Class  Room  ID',
            'BED_ID' => 'Bed  ID',
            'KELUAR_ID' => 'Keluar  ID',
            'IN_DATE' => 'In  Date',
            'EXIT_DATE' => 'Exit  Date',
            'DIANTAR_OLEH' => 'Diantar  Oleh',
            'GENDER' => 'Gender',
            'DESCRIPTION' => 'Description',
            'VISITOR_ADDRESS' => 'Visitor  Address',
            'MODIFIED_BY' => 'Modified  By',
            'MODIFIED_DATE' => 'Modified  Date',
            'MODIFIED_FROM' => 'Modified  From',
            'EMPLOYEE_ID' => 'Employee  ID',
            'EMPLOYEE_ID_FROM' => 'Employee  Id  From',
            'RESPONSIBLE_ID' => 'Responsible  ID',
            'RESPONSIBLE' => 'Responsible',
            'FAMILY_STATUS_ID' => 'Family  Status  ID',
            'TICKET_NO' => 'Ticket  No',
            'ISATTENDED' => 'Isattended',
            'PAYOR_ID' => 'Payor  ID',
            'CLASS_ID' => 'Class  ID',
            'ISPERTARIF' => 'Ispertarif',
            'KAL_ID' => 'Kal  ID',
            'EMPLOYEE_INAP' => 'Employee  Inap',
            'PASIEN_ID' => 'Pasien  ID',
            'KARYAWAN' => 'Karyawan',
            'ACCOUNT_ID' => 'Account  ID',
            'CLASS_ID_PLAFOND' => 'Class  Id  Plafond',
            'BACKCHARGE' => 'Backcharge',
            'COVERAGE_ID' => 'Coverage  ID',
            'AGEYEAR' => 'Umur',
            'AGEMONTH' => 'Agemonth',
            'AGEDAY' => 'Ageday',
            'RECOMENDATION' => 'Recomendation',
            'CONCLUSION' => 'Conclusion',
            'SPECIMENNO' => 'Specimenno',
            'LOCKED' => 'Locked',
            'RM_OUT_DATE' => 'Rm  Out  Date',
            'RM_IN_DATE' => 'Rm  In  Date',
            'LAMA_PINJAM' => 'Lama  Pinjam',
            'STANDAR_RJ' => 'Standar  Rj',
            'LENGKAP_RJ' => 'Lengkap  Rj',
            'LENGKAP_RI' => 'Lengkap  Ri',
            'RESEND_RM_DATE' => 'Resend  Rm  Date',
            'LENGKAP_RM1' => 'Lengkap  Rm1',
            'LENGKAP_RESUME' => 'Lengkap  Resume',
            'LENGKAP_ANAMNESIS' => 'Lengkap  Anamnesis',
            'LENGKAP_CONSENT' => 'Lengkap  Consent',
            'LENGKAP_ANESTESI' => 'Lengkap  Anestesi',
            'LENGKAP_OP' => 'Lengkap  Op',
            'BACK_RM_DATE' => 'Back  Rm  Date',
            'VALID_RM_DATE' => 'Valid  Rm  Date',
            'NO_SKP' => 'No  Skp',
            'DIAGNOSA_ID' => 'Diagnosa  ID',
            'TICKET_ALL' => 'Ticket  All',
            'SERVICED_TIME' => 'Serviced  Time',
            'NO_SKPINAP' => 'No  Skpinap',
            'TANGGAL_RUJUKAN' => 'Tanggal  Rujukan',
            'SEP_PRINTDATE' => 'Sep  Printdate',
            'RAD_INPUT' => 'Ket Input',
        ];
    }

   
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDIETINAPs()
    {
        return $this->hasMany(DIETINAP::className(), ['VISIT_ID' => 'VISIT_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPASIENSPECIMENs()
    {
        return $this->hasMany(PASIENSPECIMEN::className(), ['VISIT_ID' => 'VISIT_ID']);
    }

    public function getNama()
    {
        return $this->hasOne(PASIEN::className(), [ 'NO_REGISTRATION'=> 'NO_REGISTRATION']);
    }
    public function getProses()
    {
        return $this->hasOne(IdProses::className(), [ 'kode'=> 'RAD_INPUT']);
    }
    /**
     * {@inheritdoc}
     * @return PasienVisitationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PasienVisitationQuery(get_called_class());
    }
}
