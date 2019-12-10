<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PasienVisitation;

/**
 * PasienVisitationSearch represents the model behind the search form about `app\models\PasienVisitation`.
 */
class PasienVisitationSearch extends PasienVisitation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ORG_UNIT_CODE', 'NO_REGISTRATION', 'VISIT_ID', 'STATUS_PASIEN_ID', 'RUJUKAN_ID', 'ADDRESS_OF_RUJUKAN', 'REASON_ID', 'WAY_ID', 'PATIENT_CATEGORY_ID', 'BOOKED_DATE', 'VISIT_DATE', 'ISNEW', 'FOLLOW_UP', 'PLACE_TYPE', 'CLINIC_ID', 'CLINIC_ID_FROM', 'CLASS_ROOM_ID', 'BED_ID', 'KELUAR_ID', 'IN_DATE', 'EXIT_DATE', 'DIANTAR_OLEH', 'GENDER', 'DESCRIPTION', 'VISITOR_ADDRESS', 'MODIFIED_BY', 'MODIFIED_DATE', 'MODIFIED_FROM', 'EMPLOYEE_ID', 'EMPLOYEE_ID_FROM', 'RESPONSIBLE_ID', 'RESPONSIBLE', 'FAMILY_STATUS_ID', 'ISATTENDED', 'PAYOR_ID', 'CLASS_ID', 'ISPERTARIF', 'KAL_ID', 'EMPLOYEE_INAP', 'PASIEN_ID', 'KARYAWAN', 'ACCOUNT_ID', 'CLASS_ID_PLAFOND', 'BACKCHARGE', 'COVERAGE_ID', 'AGEYEAR', 'AGEMONTH', 'AGEDAY', 'RECOMENDATION', 'CONCLUSION', 'SPECIMENNO', 'LOCKED', 'RM_OUT_DATE', 'RM_IN_DATE', 'LAMA_PINJAM', 'STANDAR_RJ', 'LENGKAP_RJ', 'LENGKAP_RI', 'RESEND_RM_DATE', 'LENGKAP_RM1', 'LENGKAP_RESUME', 'LENGKAP_ANAMNESIS', 'LENGKAP_CONSENT', 'LENGKAP_ANESTESI', 'LENGKAP_OP', 'BACK_RM_DATE', 'VALID_RM_DATE', 'NO_SKP', 'DIAGNOSA_ID', 'SERVICED_TIME', 'NO_SKPINAP', 'TANGGAL_RUJUKAN', 'SEP_PRINTDATE', 'RAD_INPUT'], 'safe'],
            [['TICKET_NO', 'TICKET_ALL'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PasienVisitation::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'BOOKED_DATE' => $this->BOOKED_DATE,
            'VISIT_DATE' => $this->VISIT_DATE,
            'IN_DATE' => $this->IN_DATE,
            'EXIT_DATE' => $this->EXIT_DATE,
            'MODIFIED_DATE' => $this->MODIFIED_DATE,
            'TICKET_NO' => $this->TICKET_NO,
            'RM_OUT_DATE' => $this->RM_OUT_DATE,
            'RM_IN_DATE' => $this->RM_IN_DATE,
            'LAMA_PINJAM' => $this->LAMA_PINJAM,
            'RESEND_RM_DATE' => $this->RESEND_RM_DATE,
            'BACK_RM_DATE' => $this->BACK_RM_DATE,
            'VALID_RM_DATE' => $this->VALID_RM_DATE,
            'TICKET_ALL' => $this->TICKET_ALL,
            'SERVICED_TIME' => $this->SERVICED_TIME,
            'TANGGAL_RUJUKAN' => $this->TANGGAL_RUJUKAN,
        ]);

        $query->andFilterWhere(['like', 'ORG_UNIT_CODE', $this->ORG_UNIT_CODE])
            ->andFilterWhere(['like', 'NO_REGISTRATION', $this->NO_REGISTRATION])
            ->andFilterWhere(['like', 'VISIT_ID', $this->VISIT_ID])
            ->andFilterWhere(['like', 'STATUS_PASIEN_ID', $this->STATUS_PASIEN_ID])
            ->andFilterWhere(['like', 'RUJUKAN_ID', $this->RUJUKAN_ID])
            ->andFilterWhere(['like', 'ADDRESS_OF_RUJUKAN', $this->ADDRESS_OF_RUJUKAN])
            ->andFilterWhere(['like', 'REASON_ID', $this->REASON_ID])
            ->andFilterWhere(['like', 'WAY_ID', $this->WAY_ID])
            ->andFilterWhere(['like', 'PATIENT_CATEGORY_ID', $this->PATIENT_CATEGORY_ID])
            ->andFilterWhere(['like', 'ISNEW', $this->ISNEW])
            ->andFilterWhere(['like', 'FOLLOW_UP', $this->FOLLOW_UP])
            ->andFilterWhere(['like', 'PLACE_TYPE', $this->PLACE_TYPE])
            ->andFilterWhere(['like', 'CLINIC_ID', $this->CLINIC_ID])
            ->andFilterWhere(['like', 'CLINIC_ID_FROM', $this->CLINIC_ID_FROM])
            ->andFilterWhere(['like', 'CLASS_ROOM_ID', $this->CLASS_ROOM_ID])
            ->andFilterWhere(['like', 'BED_ID', $this->BED_ID])
            ->andFilterWhere(['like', 'KELUAR_ID', $this->KELUAR_ID])
            ->andFilterWhere(['like', 'DIANTAR_OLEH', $this->DIANTAR_OLEH])
            ->andFilterWhere(['like', 'GENDER', $this->GENDER])
            ->andFilterWhere(['like', 'DESCRIPTION', $this->DESCRIPTION])
            ->andFilterWhere(['like', 'VISITOR_ADDRESS', $this->VISITOR_ADDRESS])
            ->andFilterWhere(['like', 'MODIFIED_BY', $this->MODIFIED_BY])
            ->andFilterWhere(['like', 'MODIFIED_FROM', $this->MODIFIED_FROM])
            ->andFilterWhere(['like', 'EMPLOYEE_ID', $this->EMPLOYEE_ID])
            ->andFilterWhere(['like', 'EMPLOYEE_ID_FROM', $this->EMPLOYEE_ID_FROM])
            ->andFilterWhere(['like', 'RESPONSIBLE_ID', $this->RESPONSIBLE_ID])
            ->andFilterWhere(['like', 'RESPONSIBLE', $this->RESPONSIBLE])
            ->andFilterWhere(['like', 'FAMILY_STATUS_ID', $this->FAMILY_STATUS_ID])
            ->andFilterWhere(['like', 'ISATTENDED', $this->ISATTENDED])
            ->andFilterWhere(['like', 'PAYOR_ID', $this->PAYOR_ID])
            ->andFilterWhere(['like', 'CLASS_ID', $this->CLASS_ID])
            ->andFilterWhere(['like', 'ISPERTARIF', $this->ISPERTARIF])
            ->andFilterWhere(['like', 'KAL_ID', $this->KAL_ID])
            ->andFilterWhere(['like', 'EMPLOYEE_INAP', $this->EMPLOYEE_INAP])
            ->andFilterWhere(['like', 'PASIEN_ID', $this->PASIEN_ID])
            ->andFilterWhere(['like', 'KARYAWAN', $this->KARYAWAN])
            ->andFilterWhere(['like', 'ACCOUNT_ID', $this->ACCOUNT_ID])
            ->andFilterWhere(['like', 'CLASS_ID_PLAFOND', $this->CLASS_ID_PLAFOND])
            ->andFilterWhere(['like', 'BACKCHARGE', $this->BACKCHARGE])
            ->andFilterWhere(['like', 'COVERAGE_ID', $this->COVERAGE_ID])
            ->andFilterWhere(['like', 'AGEYEAR', $this->AGEYEAR])
            ->andFilterWhere(['like', 'AGEMONTH', $this->AGEMONTH])
            ->andFilterWhere(['like', 'AGEDAY', $this->AGEDAY])
            ->andFilterWhere(['like', 'RECOMENDATION', $this->RECOMENDATION])
            ->andFilterWhere(['like', 'CONCLUSION', $this->CONCLUSION])
            ->andFilterWhere(['like', 'SPECIMENNO', $this->SPECIMENNO])
            ->andFilterWhere(['like', 'LOCKED', $this->LOCKED])
            ->andFilterWhere(['like', 'STANDAR_RJ', $this->STANDAR_RJ])
            ->andFilterWhere(['like', 'LENGKAP_RJ', $this->LENGKAP_RJ])
            ->andFilterWhere(['like', 'LENGKAP_RI', $this->LENGKAP_RI])
            ->andFilterWhere(['like', 'LENGKAP_RM1', $this->LENGKAP_RM1])
            ->andFilterWhere(['like', 'LENGKAP_RESUME', $this->LENGKAP_RESUME])
            ->andFilterWhere(['like', 'LENGKAP_ANAMNESIS', $this->LENGKAP_ANAMNESIS])
            ->andFilterWhere(['like', 'LENGKAP_CONSENT', $this->LENGKAP_CONSENT])
            ->andFilterWhere(['like', 'LENGKAP_ANESTESI', $this->LENGKAP_ANESTESI])
            ->andFilterWhere(['like', 'LENGKAP_OP', $this->LENGKAP_OP])
            ->andFilterWhere(['like', 'NO_SKP', $this->NO_SKP])
            ->andFilterWhere(['like', 'DIAGNOSA_ID', $this->DIAGNOSA_ID])
            ->andFilterWhere(['like', 'NO_SKPINAP', $this->NO_SKPINAP])
            ->andFilterWhere(['like', 'SEP_PRINTDATE', $this->SEP_PRINTDATE])
            ->andFilterWhere(['like', 'RAD_INPUT', $this->RAD_INPUT]);

        return $dataProvider;
    }
}
