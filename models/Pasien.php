<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property string $ORG_UNIT_CODE
 * @property string $NO_REGISTRATION
 * @property string $PASIEN_ID
 * @property string $EMPLOYEE_ID
 * @property string $KK_NO
 * @property string $NAME_OF_PASIEN
 * @property string $PLACE_OF_BIRTH
 * @property string $DATE_OF_BIRTH
 * @property string $GENDER
 * @property int $NATION_ID
 * @property int $EDUCATION_TYPE_CODE
 * @property int $MARITALSTATUSID
 * @property int $KODE_AGAMA
 * @property string $KAL_ID
 * @property string $RT
 * @property string $RW
 * @property int $JOB_ID
 * @property int $STATUS_PASIEN_ID
 * @property int $ANAK_KE
 * @property string $CONTACT_ADDRESS
 * @property string $PHONE_NUMBER
 * @property string $MOBILE
 * @property string $EMAIL
 * @property string $PHOTO_LOCATION
 * @property string $REGISTRATION_DATE
 * @property string $MODIFIED_DATE
 * @property string $MODIFIED_BY
 * @property string $MODIFIED_FROM
 * @property string $POSTAL_CODE
 * @property string $GELAR
 * @property int $BLOOD_TYPE_ID
 * @property int $FAMILY_STATUS_ID
 * @property string $ISMENINGGAL
 * @property string $DEATH_DATE
 * @property string $PAYOR_ID
 * @property int $CLASS_ID
 * @property string $ACCOUNT_ID
 * @property string $KARYAWAN
 * @property string $DESCRIPTION
 * @property string $NEWCARD
 * @property string $BACKCHARGE
 * @property string $ORG_ID
 * @property int $COVERAGE_ID
 * @property string $MOTHER
 * @property string $FATHER
 * @property string $SPOUSE
 * @property int $LANGUAGE_ID
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'PASIEN';
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
            [['ORG_UNIT_CODE', 'NO_REGISTRATION', 'PASIEN_ID', 'EMPLOYEE_ID', 'KK_NO', 'NAME_OF_PASIEN', 'PLACE_OF_BIRTH', 'GENDER', 'KAL_ID', 'RT', 'RW', 'CONTACT_ADDRESS', 'PHONE_NUMBER', 'MOBILE', 'EMAIL', 'PHOTO_LOCATION', 'MODIFIED_BY', 'MODIFIED_FROM', 'POSTAL_CODE', 'GELAR', 'ISMENINGGAL', 'PAYOR_ID', 'ACCOUNT_ID', 'KARYAWAN', 'DESCRIPTION', 'BACKCHARGE', 'ORG_ID', 'MOTHER', 'FATHER', 'SPOUSE'], 'string'],
            [['DATE_OF_BIRTH', 'REGISTRATION_DATE', 'MODIFIED_DATE', 'DEATH_DATE', 'NEWCARD'], 'safe'],
            [['NATION_ID', 'EDUCATION_TYPE_CODE', 'MARITALSTATUSID', 'KODE_AGAMA', 'JOB_ID', 'STATUS_PASIEN_ID', 'ANAK_KE', 'BLOOD_TYPE_ID', 'FAMILY_STATUS_ID', 'CLASS_ID', 'COVERAGE_ID', 'LANGUAGE_ID'], 'integer'],
            [['NO_REGISTRATION', 'ORG_UNIT_CODE'], 'unique', 'targetAttribute' => ['NO_REGISTRATION', 'ORG_UNIT_CODE']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ORG_UNIT_CODE' => 'Org  Unit  Code',
            'NO_REGISTRATION' => 'No  Registration',
            'PASIEN_ID' => 'Pasien  ID',
            'EMPLOYEE_ID' => 'Employee  ID',
            'KK_NO' => 'Kk  No',
            'NAME_OF_PASIEN' => 'Name  Of  Pasien',
            'PLACE_OF_BIRTH' => 'Place  Of  Birth',
            'DATE_OF_BIRTH' => 'Tgl Lahir',
            'GENDER' => 'Gender',
            'NATION_ID' => 'Nation  ID',
            'EDUCATION_TYPE_CODE' => 'Education  Type  Code',
            'MARITALSTATUSID' => 'Maritalstatusid',
            'KODE_AGAMA' => 'Kode  Agama',
            'KAL_ID' => 'Kal  ID',
            'RT' => 'Rt',
            'RW' => 'Rw',
            'JOB_ID' => 'Job  ID',
            'STATUS_PASIEN_ID' => 'Status  Pasien  ID',
            'ANAK_KE' => 'Anak  Ke',
            'CONTACT_ADDRESS' => 'Contact  Address',
            'PHONE_NUMBER' => 'Phone  Number',
            'MOBILE' => 'Mobile',
            'EMAIL' => 'Email',
            'PHOTO_LOCATION' => 'Photo  Location',
            'REGISTRATION_DATE' => 'Registration  Date',
            'MODIFIED_DATE' => 'Modified  Date',
            'MODIFIED_BY' => 'Modified  By',
            'MODIFIED_FROM' => 'Modified  From',
            'POSTAL_CODE' => 'Postal  Code',
            'GELAR' => 'Gelar',
            'BLOOD_TYPE_ID' => 'Blood  Type  ID',
            'FAMILY_STATUS_ID' => 'Family  Status  ID',
            'ISMENINGGAL' => 'Ismeninggal',
            'DEATH_DATE' => 'Death  Date',
            'PAYOR_ID' => 'Payor  ID',
            'CLASS_ID' => 'Class  ID',
            'ACCOUNT_ID' => 'Account  ID',
            'KARYAWAN' => 'Karyawan',
            'DESCRIPTION' => 'Description',
            'NEWCARD' => 'Newcard',
            'BACKCHARGE' => 'Backcharge',
            'ORG_ID' => 'Org  ID',
            'COVERAGE_ID' => 'Coverage  ID',
            'MOTHER' => 'Mother',
            'FATHER' => 'Father',
            'SPOUSE' => 'Spouse',
            'LANGUAGE_ID' => 'Language  ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PasienQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PasienQuery(get_called_class());
    }
}
