<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pasien;

/**
 * PasienSearch represents the model behind the search form of `app\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ORG_UNIT_CODE', 'NO_REGISTRATION', 'PASIEN_ID', 'EMPLOYEE_ID', 'KK_NO', 'NAME_OF_PASIEN', 'PLACE_OF_BIRTH', 'DATE_OF_BIRTH', 'GENDER', 'KAL_ID', 'RT', 'RW', 'CONTACT_ADDRESS', 'PHONE_NUMBER', 'MOBILE', 'EMAIL', 'PHOTO_LOCATION', 'REGISTRATION_DATE', 'MODIFIED_DATE', 'MODIFIED_BY', 'MODIFIED_FROM', 'POSTAL_CODE', 'GELAR', 'ISMENINGGAL', 'DEATH_DATE', 'PAYOR_ID', 'ACCOUNT_ID', 'KARYAWAN', 'DESCRIPTION', 'NEWCARD', 'BACKCHARGE', 'ORG_ID', 'MOTHER', 'FATHER', 'SPOUSE'], 'safe'],
            [['NATION_ID', 'EDUCATION_TYPE_CODE', 'MARITALSTATUSID', 'KODE_AGAMA', 'JOB_ID', 'STATUS_PASIEN_ID', 'ANAK_KE', 'BLOOD_TYPE_ID', 'FAMILY_STATUS_ID', 'CLASS_ID', 'COVERAGE_ID'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Pasien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'DATE_OF_BIRTH' => $this->DATE_OF_BIRTH,
            'NATION_ID' => $this->NATION_ID,
            'EDUCATION_TYPE_CODE' => $this->EDUCATION_TYPE_CODE,
            'MARITALSTATUSID' => $this->MARITALSTATUSID,
            'KODE_AGAMA' => $this->KODE_AGAMA,
            'JOB_ID' => $this->JOB_ID,
            'STATUS_PASIEN_ID' => $this->STATUS_PASIEN_ID,
            'ANAK_KE' => $this->ANAK_KE,
            'REGISTRATION_DATE' => $this->REGISTRATION_DATE,
            'MODIFIED_DATE' => $this->MODIFIED_DATE,
            'BLOOD_TYPE_ID' => $this->BLOOD_TYPE_ID,
            'FAMILY_STATUS_ID' => $this->FAMILY_STATUS_ID,
            'DEATH_DATE' => $this->DEATH_DATE,
            'CLASS_ID' => $this->CLASS_ID,
            'NEWCARD' => $this->NEWCARD,
            'COVERAGE_ID' => $this->COVERAGE_ID,
        ]);

        $query->andFilterWhere(['like', 'ORG_UNIT_CODE', $this->ORG_UNIT_CODE])
            ->andFilterWhere(['like', 'NO_REGISTRATION', $this->NO_REGISTRATION])
            ->andFilterWhere(['like', 'PASIEN_ID', $this->PASIEN_ID])
            ->andFilterWhere(['like', 'EMPLOYEE_ID', $this->EMPLOYEE_ID])
            ->andFilterWhere(['like', 'KK_NO', $this->KK_NO])
            ->andFilterWhere(['like', 'NAME_OF_PASIEN', $this->NAME_OF_PASIEN])
            ->andFilterWhere(['like', 'PLACE_OF_BIRTH', $this->PLACE_OF_BIRTH])
            ->andFilterWhere(['like', 'GENDER', $this->GENDER])
            ->andFilterWhere(['like', 'KAL_ID', $this->KAL_ID])
            ->andFilterWhere(['like', 'RT', $this->RT])
            ->andFilterWhere(['like', 'RW', $this->RW])
            ->andFilterWhere(['like', 'CONTACT_ADDRESS', $this->CONTACT_ADDRESS])
            ->andFilterWhere(['like', 'PHONE_NUMBER', $this->PHONE_NUMBER])
            ->andFilterWhere(['like', 'MOBILE', $this->MOBILE])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
            ->andFilterWhere(['like', 'PHOTO_LOCATION', $this->PHOTO_LOCATION])
            ->andFilterWhere(['like', 'MODIFIED_BY', $this->MODIFIED_BY])
            ->andFilterWhere(['like', 'MODIFIED_FROM', $this->MODIFIED_FROM])
            ->andFilterWhere(['like', 'POSTAL_CODE', $this->POSTAL_CODE])
            ->andFilterWhere(['like', 'GELAR', $this->GELAR])
            ->andFilterWhere(['like', 'ISMENINGGAL', $this->ISMENINGGAL])
            ->andFilterWhere(['like', 'PAYOR_ID', $this->PAYOR_ID])
            ->andFilterWhere(['like', 'ACCOUNT_ID', $this->ACCOUNT_ID])
            ->andFilterWhere(['like', 'KARYAWAN', $this->KARYAWAN])
            ->andFilterWhere(['like', 'DESCRIPTION', $this->DESCRIPTION])
            ->andFilterWhere(['like', 'BACKCHARGE', $this->BACKCHARGE])
            ->andFilterWhere(['like', 'ORG_ID', $this->ORG_ID])
            ->andFilterWhere(['like', 'MOTHER', $this->MOTHER])
            ->andFilterWhere(['like', 'FATHER', $this->FATHER])
            ->andFilterWhere(['like', 'SPOUSE', $this->SPOUSE]);

        return $dataProvider;
    }
}
