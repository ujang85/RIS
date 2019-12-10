<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RegPasien;

/**
 * RegPasienSearch represents the model behind the search form of `app\models\RegPasien`.
 */
class HasilPasienSearch extends RegPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'asuransi', 'lama_baru', 'umur_tahun', 'umur_bulan', 'umur_hari', 'rujukan_asal'], 'integer'],
            [['no_cm','kesan', 'nama', 'tgl_lahir', 'sex', 'id_kunjungan', 'tgl_kunjungan', 'dokter', 'klinik_asal'], 'safe'],
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
        $query = RegPasien::find();

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
            'id' => $this->id,
            'asuransi' => $this->asuransi,
            'tgl_kunjungan' => $this->tgl_kunjungan,
            'lama_baru' => $this->lama_baru,
            'umur_tahun' => $this->umur_tahun,
            'umur_bulan' => $this->umur_bulan,
            'umur_hari' => $this->umur_hari,
            'rujukan_asal' => $this->rujukan_asal,
            
        ]);

        $query->andFilterWhere(['like', 'no_cm', $this->no_cm])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tgl_lahir', $this->tgl_lahir])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'id_kunjungan', $this->id_kunjungan])
            ->andFilterWhere(['like', 'dokter', $this->dokter])
            ->andFilterWhere(['>', 'LENGTH(kesan)', 0])
            ->andFilterWhere(['like', 'klinik_asal', $this->klinik_asal]);


        return $dataProvider;
    }
}
